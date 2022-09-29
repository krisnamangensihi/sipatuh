<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Keamanan\Entities\Sosial;
use Modules\Keamanan\Entities\Sosialdoc;

class SosialkeamananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $sosialdoc=Sosialdoc::select()->where('sosial_id', $id )->get();
        return view('keamanan.bogorkeamanan.sosial',[
        'sosial'=>Sosial::select()->where('id', $id)->get()->first(),
        'sosialdocs' => $sosialdoc
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
         Sosial::where('id',$id)->update([
            'catatan'=>$request->catatan,
            'level' =>$request->level,
            'status'=>$request->status,
            
        ]);
        return back()->with('success', 'Verifikasi Anda Berhasil');
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
