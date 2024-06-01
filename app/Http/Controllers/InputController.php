<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;
use App\Models\Penduduk;
use App\Models\Kategori;
use Alert;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input = Input::all();
       return view('admin.index', compact('input'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Input.Aspirasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Input::create([
            'nik'=>$request->get('nik'),
            'id_kategori'=>$request->get('kategori'),
            'lokasi'=>$request->get('lokasi'),
            'ket'=>$request->get('ket'),
        ]);
        return view('Input.Aspirasi'); 
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $input = Input::find($id);
        $input->delete();
        Alert::success('Delete', 'Data Laporan Berhasil Dihapus!');
        return redirect('Kategori');
    }
}
