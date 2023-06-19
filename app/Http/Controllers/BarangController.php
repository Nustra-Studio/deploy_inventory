<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\barang;
use App\Models\harga_khusus;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = barang::all();
        return view ('pages.barang.index',compact('data'));
    }

    public function input()
    {
        return view ('pages.barang.input_barang');
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
        $kategori = $request->category_barang;
        $bulan = date('m');
        $tahun = date('y');
        if ($kode_terakhir > 999) {
                $nomorUrut = str_pad($nomorUrutTerakhir, 4, '0', STR_PAD_LEFT);
            } else {
                $nomorUrut = str_pad($nomorUrutTerakhir, 3, '0', STR_PAD_LEFT);
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
                $data_harga = [
                    'uuid' => $request->uuid,
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
