<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Keamanan\Entities\Lapor;
use Modules\Keamanan\Entities\Sosial;
use Modules\Keamanan\Entities\Manager;
use Modules\Keamanan\Entities\Kerawanan;
use Modules\Keamanan\Entities\Pelatihan;
use Modules\Keamanan\Entities\Pengamanan;
use Modules\Keamanan\Entities\Kepemimpinan;

class TuntungankeamananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('keamanan.tuntungankeamanan.index',[
            'kepemimpinans'=>Kepemimpinan::select()->where('divisi','UPDL TUNTUNGAN')->get(),
            'kerawanans'=>Kerawanan::select()->where('divisi','UPDL TUNTUNGAN')->get(),
            'sosials'=>Sosial::select()->where('divisi','UPDL TUNTUNGAN')->get(),
            'pengamanans'=>Pengamanan::select()->where('divisi','UPDL TUNTUNGAN')->get(),
            'pelatihans'=>Pelatihan::select()->where('divisi','UPDL TUNTUNGAN')->get(),
            'lapors'=>Lapor::select()->where('divisi','UPDL TUNTUNGAN')->get(),
        ]);
    }
    public function tw1()
    {
          return view('keamanan.tuntungankeamanan.tw.triwulan1',[
            'kepemimpinans'=>Kepemimpinan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','1')->get(),
            'kerawanans'=>Kerawanan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','1')->get(),
            'sosials'=>Sosial::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','1')->get(),
            'pengamanans'=>Pengamanan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','1')->get(),
            'pelatihans'=>Pelatihan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','1')->get(),
            'lapors'=>Lapor::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','1')->get(),
    ]);
}
    public function tw2()
    {
          return view('keamanan.tuntungankeamanan.tw.triwulan2',[
            'kepemimpinans'=>Kepemimpinan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','2')->get(),
            'kerawanans'=>Kerawanan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','2')->get(),
            'sosials'=>Sosial::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','2')->get(),
            'pengamanans'=>Pengamanan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','2')->get(),
            'pelatihans'=>Pelatihan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','2')->get(),
            'lapors'=>Lapor::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','2')->get(),
    ]);
}
    public function tw3()
    {
          return view('keamanan.tuntungankeamanan.tw.triwulan3',[
            'kepemimpinans'=>Kepemimpinan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','3')->get(),
            'kerawanans'=>Kerawanan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','3')->get(),
            'sosials'=>Sosial::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','3')->get(),
            'pengamanans'=>Pengamanan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','3')->get(),
            'pelatihans'=>Pelatihan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','3')->get(),
            'lapors'=>Lapor::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','3')->get(),
    ]);
}
    public function tw4()
    {
          return view('keamanan.tuntungankeamanan.tw.triwulan4',[
            'kepemimpinans'=>Kepemimpinan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','4')->get(),
            'kerawanans'=>Kerawanan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','4')->get(),
            'sosials'=>Sosial::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','4')->get(),
            'pengamanans'=>Pengamanan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','4')->get(),
            'pelatihans'=>Pelatihan::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','4')->get(),
            'lapors'=>Lapor::select()->where('divisi','UPDL TUNTUNGAN')->where('triwulan','4')->get(),
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
