<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Keamanan\Entities\Kepemimpinan;
use Modules\Keamanan\Entities\Kepemimpinandoc;

class KepemimpinankeamananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('kepemimpinan.kepemimpinan',[
        // 'kepemimpinans'=>Kepemimpinan::select()->where('status','diajukan')->filter(request(['seacrh']))->get(),
        // ]);
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
        $kepemimpinandoc=Kepemimpinandoc::select()->where('kepemimpinan_id', $id )->get();
        return view('keamanan.bogorkeamanan.kepemimpinan',[
        'kepemimpinan'=>Kepemimpinan::select()->where('id', $id)->get()->first(),
        'kepemimpinandocs' => $kepemimpinandoc
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
        Kepemimpinan::where('id',$id)->update([
            'catatan'=>$request->catatan,
            'level' =>$request->level,
            'status'=>$request->status,
        ]);
        return back()->with('success', 'Update anda berhasil');
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
