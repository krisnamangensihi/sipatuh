<?php

namespace Modules\Keamanan\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Keamanan\Entities\Lapor;
use Modules\Keamanan\Entities\Sosial;
use Modules\Keamanan\Entities\Kerawanan;
use Modules\Keamanan\Entities\Pelatihan;
use Modules\Keamanan\Entities\Pengamanan;
use Modules\Keamanan\Entities\Kepemimpinan;
use Illuminate\Contracts\Support\Renderable;

class MangensihiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
         // $k3l = K3l::paginate(4); 
        $rekapkepemimpinan=Kepemimpinan::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $rekapsosial=Sosial::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $rekappengamanan=Pengamanan::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $rekapkerawanan=Kerawanan::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $rekappelatihan=Pelatihan::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $rekaplapor=Lapor::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $p=$rekapkepemimpinan+$rekapsosial+$rekappengamanan+$rekapkerawanan+$rekappelatihan+$rekaplapor;
        $hitung=$p/6;
        $sosial = sosial::select()->where('user_id', Auth::user()->id)->get();
        $kepemimpinan = Kepemimpinan::select()->where('user_id', Auth::user()->id)->get();
        $kepim = Kepemimpinan::select()->where('user_id', Auth::user()->id)->get()->first();
        $pengamanan = Pengamanan::select()->where('user_id', Auth::user()->id)->get();
        $kerawanan = Kerawanan::select()->where('user_id', Auth::user()->id)->get();
        $pelatihan = Pelatihan::select()->where('user_id', Auth::user()->id)->get();
        $lapor = Lapor::select()->where('user_id', Auth::user()->id)->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        
        $pdf=PDF::loadview ('keamanan::rekap', compact('kepemimpinan','kepim','sosial','pengamanan','kerawanan','pelatihan','lapor','rekapsosial','rekapkepemimpinan','rekappengamanan','rekapkerawanan','rekappelatihan','rekaplapor','hitung'));
        return $pdf->stream('Laporan Surat Keamanan.pdf');
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
        return view('keamanan::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('keamanan::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
