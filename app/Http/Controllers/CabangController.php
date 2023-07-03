<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cabang;
// tambahkan db
use Illuminate\Support\Facades\DB;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = cabang::all();
        return view('pages.cabang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.cabang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create database for request data
        $data = $request->all();
        // create new data
        $namas = $data['nama'];
        $nama = str_replace(' ', '_', $namas);
        $database = "cabang_$nama";
        $query = "
        CREATE TABLE cabang_$nama (
            `id` bigint(20) UNSIGNED NOT NULL,
            `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `id_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `kode_barang` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `harga` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `harga_jual` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `harga_pokok` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `harga_grosir` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `stok` int(16) NOT NULL,
            `keterangan` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
            `merek_barang` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `type_barang_id` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
        DB::statement($query);
        $query2 = " 
        CREATE TABLE `transaction_$database` (
            `id` bigint(20) UNSIGNED NOT NULL,
            `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `name` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `jumlah` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `kode_barang` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `status` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `id_member` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `keterangan` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `harga_pokok` int(11) DEFAULT NULL,
            `harga_jual` int(11) DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
        DB::statement($query2);
        $newdata = [
            'nama' => $data['nama'],
            'alamat' => $data['alamat'],
            'keterangan' => $data['keterangan'],
            'kepala_cabang' => $data['kepala_cabang'],
            'telepon' => $data['telepon'],
            'category_id' => $data['category_id'],
            'uuid'=> $data['uuid'],
            'database' => "cabang_$nama",
        ];
        DB::table('cabangs')->insert($newdata);
        return redirect()->route('cabang.index')->with('success', 'Data cabang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
