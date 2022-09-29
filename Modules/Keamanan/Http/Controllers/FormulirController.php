<?php

namespace Modules\Keamanan\Http\Controllers;

use App\Models\User;
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

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::first();
        $kepemimpinan = Kepemimpinan::select()->where('user_id', Auth::user()->id)->get();
        $sosial = Sosial::select()->where('user_id', Auth::user()->id)->get();
        $pengamanan = Pengamanan::select()->where('user_id', Auth::user()->id)->get();
        $kerawanan = Kerawanan::select()->where('user_id', Auth::user()->id)->get();
        $pelatihan = Pelatihan::select()->where('user_id', Auth::user()->id)->get();
        $lapor = Lapor::select()->where('user_id', Auth::user()->id)->get();
        $pdf=PDF::loadview ('keamanan::cetak', compact('kepemimpinan','sosial','pengamanan','user','kerawanan','pelatihan','lapor'));
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
