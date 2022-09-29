<?php

namespace Modules\Keamanan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Keamanan\Entities\Lapor;
use Modules\Keamanan\Entities\Sosial;
use Modules\Keamanan\Entities\Manager;
use Modules\Keamanan\Entities\Kerawanan;
use Modules\Keamanan\Entities\Pelatihan;
use Modules\Keamanan\Entities\Pengamanan;
use Modules\Keamanan\Entities\Kepemimpinan;
use Illuminate\Contracts\Support\Renderable;
use Modules\Keamanan\Entities\Kepemimpinandoc;

class DatakeamananController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('keamanan::datakeamanan',[
            'kepemimpinans'=>Kepemimpinan::select()->where('user_id', Auth::user()->id)->get(),
            'sosials'=>Sosial::select()->where('user_id', Auth::user()->id)->get(),
            'pengamanans'=>Pengamanan::select()->where('user_id', Auth::user()->id)->get(),
            'kerawanans'=>Kerawanan::select()->where('user_id', Auth::user()->id)->get(),
            'pelatihans'=>Pelatihan::select()->where('user_id', Auth::user()->id)->get(),
            // 'managers'=>Manager::select()->where('user_id', Auth::user()->id)->get(),
            'lapors'=>Lapor::select()->where('user_id', Auth::user()->id)->get(),
        ]);
    }

     public function tw1()
    {
          return view('keamanan::tw.triwulan1',[
            'kepemimpinans'=>Kepemimpinan::select()->where('user_id', Auth::user()->id)->where('triwulan','1')->get(),
            'kerawanans'=>Kerawanan::select()->where('user_id', Auth::user()->id)->where('triwulan','1')->get(),
            'sosials'=>Sosial::select()->where('user_id', Auth::user()->id)->where('triwulan','1')->get(),
            'pengamanans'=>Pengamanan::select()->where('user_id', Auth::user()->id)->where('triwulan','1')->get(),
            'pelatihans'=>Pelatihan::select()->where('user_id', Auth::user()->id)->where('triwulan','1')->get(),
            'lapors'=>Lapor::select()->where('user_id', Auth::user()->id)->where('triwulan','1')->get(),
    ]);
}
     public function tw2()
    {
          return view('keamanan::tw.triwulan2',[
            'kepemimpinans'=>Kepemimpinan::select()->where('user_id', Auth::user()->id)->where('triwulan','2')->get(),
            'kerawanans'=>Kerawanan::select()->where('user_id', Auth::user()->id)->where('triwulan','2')->get(),
            'sosials'=>Sosial::select()->where('user_id', Auth::user()->id)->where('triwulan','2')->get(),
            'pengamanans'=>Pengamanan::select()->where('user_id', Auth::user()->id)->where('triwulan','2')->get(),
            'pelatihans'=>Pelatihan::select()->where('user_id', Auth::user()->id)->where('triwulan','2')->get(),
            'lapors'=>Lapor::select()->where('user_id', Auth::user()->id)->where('triwulan','2')->get(),
    ]);
}
     public function tw3()
    {
          return view('keamanan::tw.triwulan3',[
            'kepemimpinans'=>Kepemimpinan::select()->where('user_id', Auth::user()->id)->where('triwulan','3')->get(),
            'kerawanans'=>Kerawanan::select()->where('user_id', Auth::user()->id)->where('triwulan','3')->get(),
            'sosials'=>Sosial::select()->where('user_id', Auth::user()->id)->where('triwulan','3')->get(),
            'pengamanans'=>Pengamanan::select()->where('user_id', Auth::user()->id)->where('triwulan','3')->get(),
            'pelatihans'=>Pelatihan::select()->where('user_id', Auth::user()->id)->where('triwulan','3')->get(),
            'lapors'=>Lapor::select()->where('user_id', Auth::user()->id)->where('triwulan','3')->get(),
    ]);
}
     public function tw4()
    {
          return view('keamanan::tw.triwulan4',[
            'kepemimpinans'=>Kepemimpinan::select()->where('user_id', Auth::user()->id)->where('triwulan','4')->get(),
            'kerawanans'=>Kerawanan::select()->where('user_id', Auth::user()->id)->where('triwulan','4')->get(),
            'sosials'=>Sosial::select()->where('user_id', Auth::user()->id)->where('triwulan','4')->get(),
            'pengamanans'=>Pengamanan::select()->where('user_id', Auth::user()->id)->where('triwulan','4')->get(),
            'pelatihans'=>Pelatihan::select()->where('user_id', Auth::user()->id)->where('triwulan','4')->get(),
            'lapors'=>Lapor::select()->where('user_id', Auth::user()->id)->where('triwulan','4')->get(),
    ]);
}
    
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('keamanan::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $kepemimpinandoc=Kepemimpinandoc::select()->where('kepemimpinan_id', $id)->get();
        return view('keamanan::kepemimpinan.lihat',[
            'kepemimpinandocs'=>$kepemimpinandoc,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('keamanan::kepemimpinan.edit', [
        'kepemimpinan'=>Kepemimpinan::select()->where('id',$id)->get()->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
   {
         {
            
        Kepemimpinan::where('id',$id)->update([
                    // 'id'=>$id,
                    // 'user_id'=>Auth::user()->id,
                    'no_kriteria'=>$request->no_kriteria,
                    'sub_kriteria'=>$request->sub_kriteria,
                    'level'=> $request->level,
                    'status'=>$request->status,
                    // 'document' => $document,
                    // 'keterangan' => $request->keterangan,
        ]);

                foreach ($request->kepemimpinandoc as $key => $value) {
                if ($value['document']){
                    $document=$value['document']->store('file_keamanan');

                Kepemimpinandoc::create([
                    'kepemimpinan_id' => $id,
                    'keterangan' => $value['keterangan'],
                    'document' => $document,
                ]);
            }
             return redirect('/Keamanan/datakeamanan')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO'); 
        }
    }
}

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Kepemimpinan::where('id',$id)->delete();
         return redirect('/Keamanan/datakeamanan')->with('success', 'Data anda berasil dihapus');
    }
}
