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

class KikeamananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('keamanan.kantorinduk.index',[
            'kepemimpinans'=>Kepemimpinan::select()->where('divisi','KANTOR INDUK')->get(),
            'kerawanans'=>Kerawanan::select()->where('divisi','KANTOR INDUK')->get(),
            'sosials'=>Sosial::select()->where('divisi','KANTOR INDUK')->get(),
            'pengamanans'=>Pengamanan::select()->where('divisi','KANTOR INDUK')->get(),
            'pelatihans'=>Pelatihan::select()->where('divisi','KANTOR INDUK')->get(),
            'lapors'=>Lapor::select()->where('divisi','KANTOR INDUK')->get(),
        ]);
    }
    public function tw1()
    {
          return view('keamanan.kantorinduk.tw.triwulan1',[
            'kepemimpinans'=>Kepemimpinan::select()->where('divisi','KANTOR INDUK')->where('triwulan','1')->get(),
            'kepim'=>Kepemimpinan::select()->where('divisi','UPDL BOGOR')->where('triwulan','1')->get()->first(),
            'kerawanans'=>Kerawanan::select()->where('divisi','KANTOR INDUK')->where('triwulan','1')->get(),
            'sosials'=>Sosial::select()->where('divisi','KANTOR INDUK')->where('triwulan','1')->get(),
            'pengamanans'=>Pengamanan::select()->where('divisi','KANTOR INDUK')->where('triwulan','1')->get(),
            'pelatihans'=>Pelatihan::select()->where('divisi','KANTOR INDUK')->where('triwulan','1')->get(),
            'lapors'=>Lapor::select()->where('divisi','KANTOR INDUK')->where('triwulan','1')->get(),
    ]);
}
    public function tw2()
    {
          return view('keamanan.kantorinduk.tw.triwulan2',[
            'kepemimpinans'=>Kepemimpinan::select()->where('divisi','KANTOR INDUK')->where('triwulan','2')->get(),
            'kepim'=>Kepemimpinan::select()->where('divisi','UPDL BOGOR')->where('triwulan','2')->get()->first(),
            'kerawanans'=>Kerawanan::select()->where('divisi','KANTOR INDUK')->where('triwulan','2')->get(),
            'sosials'=>Sosial::select()->where('divisi','KANTOR INDUK')->where('triwulan','2')->get(),
            'pengamanans'=>Pengamanan::select()->where('divisi','KANTOR INDUK')->where('triwulan','2')->get(),
            'pelatihans'=>Pelatihan::select()->where('divisi','KANTOR INDUK')->where('triwulan','2')->get(),
            'lapors'=>Lapor::select()->where('divisi','KANTOR INDUK')->where('triwulan','2')->get(),
    ]);
}
    public function tw3()
    {
          return view('keamanan.kantorinduk.tw.triwulan3',[
            'kepemimpinans'=>Kepemimpinan::select()->where('divisi','KANTOR INDUK')->where('triwulan','3')->get(),
            'kepim'=>Kepemimpinan::select()->where('divisi','UPDL BOGOR')->where('triwulan','3')->get()->first(),
            'kerawanans'=>Kerawanan::select()->where('divisi','KANTOR INDUK')->where('triwulan','3')->get(),
            'sosials'=>Sosial::select()->where('divisi','KANTOR INDUK')->where('triwulan','3')->get(),
            'pengamanans'=>Pengamanan::select()->where('divisi','KANTOR INDUK')->where('triwulan','3')->get(),
            'pelatihans'=>Pelatihan::select()->where('divisi','KANTOR INDUK')->where('triwulan','3')->get(),
            'lapors'=>Lapor::select()->where('divisi','KANTOR INDUK')->where('triwulan','3')->get(),
    ]);
}
    public function tw4()
    {
          return view('keamanan.kantorinduk.tw.triwulan4',[
            'kepemimpinans'=>Kepemimpinan::select()->where('divisi','KANTOR INDUK')->where('triwulan','4')->get(),
            'kepim'=>Kepemimpinan::select()->where('divisi','UPDL BOGOR')->where('triwulan','4')->get()->first(),
            'kerawanans'=>Kerawanan::select()->where('divisi','KANTOR INDUK')->where('triwulan','4')->get(),
            'sosials'=>Sosial::select()->where('divisi','KANTOR INDUK')->where('triwulan','4')->get(),
            'pengamanans'=>Pengamanan::select()->where('divisi','KANTOR INDUK')->where('triwulan','4')->get(),
            'pelatihans'=>Pelatihan::select()->where('divisi','KANTOR INDUK')->where('triwulan','4')->get(),
            'lapors'=>Lapor::select()->where('divisi','KANTOR INDUK')->where('triwulan','4')->get(),
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
         if (request('tw')=='tw1'){
            return view('keamanan.kantorinduk.tw.upload1', [
            'kepemimpinan'=>Kepemimpinan::select()->where('id',$id)->get()->first(),
            ]);
            
        }
        elseif (request('tw')=='tw2'){
            return view('keamanan.kantorinduk.tw.upload2', [
            'kepemimpinan'=>Kepemimpinan::select()->where('id',$id)->get()->first(),
            ]);
            
        }
        elseif (request('tw')=='tw3'){
            return view('keamanan.kantorinduk.tw.upload3', [
            'kepemimpinan'=>Kepemimpinan::select()->where('id',$id)->get()->first(),
            ]);
            
        }
        elseif (request('tw')=='tw4'){
            return view('keamanan.kantorinduk.tw.upload4', [
            'kepemimpinan'=>Kepemimpinan::select()->where('id',$id)->get()->first(),
            ]);
            
        }
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
         $request->validate([
            'document' => 'required',
        ]);
            $document=$request->file('document')->store('file_keamanan');
        if($request->file('document')){
            $document;
        }
        Kepemimpinan::where('id',$id)->update([
            'verifikasi'=>$request->verifikasi,
            'name'=>$request->name,
            'nip'=>$request->nip,
            'document'=>$document,
            
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
