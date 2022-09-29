<?php

namespace App\Http\Controllers\Semarang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Lingkungan\Entities\P5d;

class Semarang5dController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('adling.semarang.p5.p5d.p5d',[
            'p5ds'=>P5d::select()->where('divisi','PT. PLN (Persero) UPDL SEMARANG')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('adling.semarang.p5.p5d.lihat',[
            'p5d'=>P5d::select()->where('id',$id)->get()->first(),

        ]);
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
        P5d::where('id',$id)->update([
            'catatan'=>$request->catatan,
            'status'=>$request->status,
        ]);
        return redirect('/semar5d')->with('success', 'Data anda berasil diubah');
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
