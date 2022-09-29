<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use Modules\Keamanan\Entities\Lapor;
use Modules\Keamanan\Entities\Sosial;
use Modules\Keamanan\Entities\Kerawanan;
use Modules\Keamanan\Entities\Pelatihan;
use Modules\Keamanan\Entities\Pengamanan;
use Modules\Keamanan\Entities\Kepemimpinan;

class CetaktuntungankeamananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::first();
        $kepemimpinan = Kepemimpinan::select()->where('divisi','UPDL TUNTUNGAN')->get();
        $sosial = Sosial::select()->where('divisi','UPDL TUNTUNGAN')->get();
        $pengamanan = Pengamanan::select()->where('divisi','UPDL TUNTUNGAN')->get();
        $kerawanan = Kerawanan::select()->where('divisi','UPDL TUNTUNGAN')->get();
        $pelatihan = Pelatihan::select()->where('divisi','UPDL TUNTUNGAN')->get();
        $lapor = Lapor::select()->where('divisi','UPDL TUNTUNGAN')->get();
        $pdf=PDF::loadview ('keamanan.tuntungankeamanan.pdf', compact('kepemimpinan','sosial','pengamanan','user','kerawanan','pelatihan','lapor'));
       return $pdf->stream('Laporan Surat Keamanan.pdf');
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
