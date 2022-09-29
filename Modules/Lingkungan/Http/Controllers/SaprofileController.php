<?php

namespace Modules\Lingkungan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Lingkungan\Entities\Saprofile;
use Illuminate\Contracts\Support\Renderable;

class SaprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('lingkungan::point1.saprofile');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('lingkungan::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        // return $request;
        $query=Saprofile::select()->get->count();
        $id=$query+1;
        Saprofile::create([
            'id'=>$id,
            'nama_perusahaan'=>$request->nama_perusahaan,
            'alamat_kegiatan'=> $request->alamat_kegiatan,
            'no_perusahaan'=>$request->no_perusahaan,
            'alamat_kantor'=>$request->alamat_kantor,
            'no_kantor'=>$request->no_kantor,
            'holding'=>$request->holding,
            'alamat_holding'=>$request->alamat_holding,
            'no_holding'=>$request->no_holding,
            'tahun'=>$request->tahun,
            'jenis'=>$request->jenis,
            'modal'=>$request->modal,
            'luas'=>$request->luas,
            'jumlah'=>$request->jumlah,
            'kapasitas_produksi'=>$request->kapasitas_produksi,
            'terpasang'=>$request->terpasang,
            'senyatanya'=>$request->senyatanya,
            'bahan_baku'=>$request->bahan_baku,
            'bahan_penolong'=>$request->bahan_penolong,
            'prosentasi_pemasaran'=>$request->prosentasi_pemasaran,
            'prosentasi_lokal'=>$request->prosentasi_lokal,
            'dokumen'=>$request->dokumen,
            'ppa'=>$request->ppa,
            'ppu'=>$request->ppu,
            'lahanlimbahb3'=>$request->limbahb3,
            'kontak1'=>$request->kontak1,
            'no_hp1'=>$request->no_hp1,
            'kontak2'=>$request->kontak2,
            'no_hp2'=>$request->no_hp2,
            'tanggal_dibuat'=>$request->tanggal_dibuat,

        ]);
    }


    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('lingkungan::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('lingkungan::edit');
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
