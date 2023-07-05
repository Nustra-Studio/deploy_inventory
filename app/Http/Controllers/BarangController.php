<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\barang;
use App\Models\harga_khusus;
use App\Models\category_barang;
use App\Models\suplier;
use Mike42\Escpos\CapabilityProfile;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = barang::where('uuid', '!=', 'hidden')->get();
        return view ('pages.barang.index',compact('data'));
    }
    public function getProductsBySupplier(Request $request)
    {
        $suppliers = $request->input('supplier');
        $supplier = suplier::where('name', $suppliers)->value('uuid');
        // Fetch the products based on the selected supplier
        $products = barang::where('id_supplier', $supplier)->get();
    
        return response()->json(['products' => $products]);
    }
    public function resource( Request $request)
    {
        $data = barang::where('uuid', '=' ,"$request->uuid")->get();
        return response()->json($data, 200);
    }

    public function input()
    {
        return view ('pages.barang.input_barang');
    }
    public function inputcreate(Request $request){
        $data = $request->input('data_table_values');
        $data = json_decode($data, true);
        $uuid = Str::uuid()->toString();
        foreach ($data as $row) {
            $supplier = suplier::where('nama', $row['supplier'])->value('uuid');
            $stock = barang::where('name', $row['Name'])->value('stok');
            $stock = $stock + $row['jumlah'];
            DB::table('barangs')->updateOrInsert(
                ['name' => $row['Name']],
                [
                    'stok' => $stock,
                    'Harga_pokok' => $row['Harga_pokok'],
                    'harga_jual' => $row['harga_jual'],
                    'id_supplier' => $supplier,
                ]
            );
        }
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Di Tambahkan');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data_terakhir = DB::table('barangs')->latest('kode_barang')->first();
        $kode_terakhir = $data_terakhir->kode_barang;
        $kategori = category_barang::where('uuid',$request->category_barang)->value('name') ;
        $bulan = date('m');
        $tahun = date('y');
        if ($kode_terakhir > 999) {
                $nomorUrut = str_pad(mt_rand(1000, 9999), 4, '0', STR_PAD_LEFT);
            } else {
                $nomorUrut = str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
            }

        $kode = $kategori . $bulan . $tahun . $nomorUrut;
        $data_master =[
            'name' => $request->name,
            'merek_barang' => $request->merek_barang,
            'uuid' => $request->uuid,
            'id_supplier' => $request->supplier,
            'category_id' => $request->category_barang,
            'harga_pokok' => $request->harga_pokok,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->jumlah,
            'kode_barang' => $kode,
            'keterangan' => $request->keterangan,
        ];
        $push = barang::create($data_master);

            for($j=0; $j < count($request->nama); $j++){
                $uuid= hash('sha256', uniqid(mt_rand(), true));
                $data_harga = [
                    'uuid' => $uuid,
                    'id_barang'=> $request->uuid,
                    'harga' => $request->harga[$j],
                    'jumlah_minimal' => $request->jumlah_minimal[$j],
                    'diskon' => $request->diskon[$j],
                    'keterangan' => $request->nama[$j],
                    // 'satuan' => $request->satuan[$j],
                ];
                $push = harga_khusus::create($data_harga);
            }
            return redirect()->route('barang.index')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $kategori = 'supplier';
        // $bulan = date('m');
        // $tahun = date('y');

        // // Dapatkan nomor urut terakhir yang digunakan
        // $nomorUrutTerakhir = DB::table('tabel_nomor_urut')->where('kategori', $kategori)->value('nomor_urut');
        // if ($nomorUrutTerakhir === null) {
        //     $nomorUrutTerakhir = 0;
        // }

        // // Generate nomor urut baru yang belum digunakan
        // $nomorUrutTerakhir++; // Increment nomor urut terakhir

        // // Cek apakah nomor urut terakhir mencapai batas 999
        // if ($nomorUrutTerakhir > 999) {
        //     $kategori .= '4'; // Ubah kategori menjadi 'supplier4'
        //     $nomorUrutTerakhir = 1; // Reset nomor urut terakhir menjadi 1
        //     $nomorUrut = str_pad($nomorUrutTerakhir, 4, '0', STR_PAD_LEFT);
        //     $tahun = date('Y'); // Ubah format tahun menjadi empat digit
        // } else {
        //     $nomorUrut = str_pad($nomorUrutTerakhir, 3, '0', STR_PAD_LEFT);
        // }

        // $kode = $kategori . $bulan . $tahun . $nomorUrut;

        // // Simpan nomor urut terakhir yang digunakan ke database
        // DB::table('tabel_nomor_urut')->updateOrInsert(['kategori' => $kategori], ['nomor_urut' => $nomorUrutTerakhir]);

        // // Contoh penggunaan
        // echo $kode;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
