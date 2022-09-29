<?php

namespace Modules\Lingkungan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Lingkungan\Entities\Point3;
use Modules\Lingkungan\Entities\Point3doc;
use Illuminate\Contracts\Support\Renderable;

class Point3aController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('lingkungan::point3.point3a',[
            'point3s'=>Point3::select()->where('user_id', Auth::user()->id)->get(),
        ]);
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

        // dd($request);

        $query=Point3::select()->get()->count();
            $id=$query+1;
            Point3::create([
                    'id'=>$id,
                    'user_id'=>Auth::user()->id,
                    'jenis'=>$request->jenis,
                    'nomer_surat'=>$request->nomer_surat,
                    'wulan'=>$request->wulan,
                    'perihal'=>$request->perihal,
                    'divisi'=>$request->divisi,
                    'bulan'=>$request->bulan,
                    'tanggal_dibuat'=> $request->tanggal_dibuat,
                    // 'keterangan'=>$request->keterangan,


            ]);
            foreach ($request->point3doc as $key => $value) {
                if ($value['berkas']){
                    $berkas=$value['berkas']->store('dokumen1');
                }

                Point3doc::create([
                    'pemenuhan_id'=>$id,
                    'keterangan' => $value['keterangan'],
                    'berkas' => $berkas,

                ]);
            }
        return redirect('/Lingkungan/point3a')->with('success', 'Pengajuan anda sedang diproses');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        // return view('lingkungan::show');
        $Point3doc=Point3doc::select()->where('pemenuhan_id', $id)->get();
        return view('lingkungan::point3.lihat',[
            'point3docs'=>$Point3doc,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        // return view('lingkungan::edit');
        return view('lingkungan::point3.edit',[
            'point3'=>Point3::select()->where('id', $id)->get()->first(),
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
        //
        Point3::where('id', $id)->update([
            'id'=>$id,
            'jenis'=>$request->jenis,
            'nomer_surat'=>$request->nomer_surat,
            'perihal'=>$request->perihal,
            'wulan'=>$request->wulan,
            'bulan'=>$request->bulan,
        ]);
        return redirect('Lingkungan/point3a')->with('success', 'Data anda berasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        Point3::where('id',$id)->delete();
        return redirect('Lingkungan/point3a')->with('success', 'Data anda berasil dihapus');
    }
}
