<?php

namespace App\Http\Controllers\Tuntungan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Lingkungan\Entities\P5a;
use Modules\Lingkungan\Entities\P5adoc;

class Tuntungan5aController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('adling.tuntungan.p5.p5a.p5a',[
            'p5as'=>P5a::select()->where('divisi','PT. PLN (Persero) UPDL TUNTUNGAN')->get(),
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
        $P5adoc=P5adoc::select()->where('pemenuhan_id', $id)->get();
        return view('adling.tuntungan.p5.p5a.lihat',[
            'p5a'=>P5a::select()->where('id',$id)->get()->first(),
            'p5adocs'=>$P5adoc,
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
        P5a::where('id',$id)->update([
            'catatan'=>$request->catatan,
            'status'=>$request->status,
        ]);
        return redirect('/tun5a')->with('success', 'Data anda berasil diubah');
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
