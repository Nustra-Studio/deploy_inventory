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
        $newdata = [
            'nama' => $data['nama'],
            'alamat' => $data['alamat'],
            'keterangan' => $data['keterangan'],
            'kepala_cabang' => $data['kepala_cabang'],
            'telepon' => $data['telepon'],
            'category_id' => $data['category_id'],
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
