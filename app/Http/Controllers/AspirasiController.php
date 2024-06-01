<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;
use App\Models\Input;
use Alert;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirasi = Aspirasi::all();
       return view('admin.aspirasi.index',  compact('aspirasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aspirasi::create([
            'status'=>$request->get('status'),
            'nik'=>$request->get('nik'),
            'feedback'=>$request->get('feedback'),
        ]);
        Alert::success('Submit', 'Aspirasi  berhasil Ditambah!');
        return redirect('Aspirasi'); 
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
        $aspirasi= Aspirasi::find($id);
        return view('admin.aspirasi.edit', compact('aspirasi'));
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
        $aspirasi= Aspirasi::find($id);
        $aspirasi->status=$request->GET('status');
        $aspirasi->id_pelaporan=$request->GET('pelaporan');
        $aspirasi->feedback=$request->GET('feedback');
        $aspirasi->save();
        Alert::success('Update', 'Data Aspirasi berhasil Diubah!');
        return redirect('Aspirasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->delete();
        Alert::success('Delete', 'Data Aspirasi  berhasil Dihapus!');
        return redirect('Aspirasi');
    }
    
}
