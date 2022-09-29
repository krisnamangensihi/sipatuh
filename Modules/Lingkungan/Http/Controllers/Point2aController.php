<?php

namespace Modules\Lingkungan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Lingkungan\Entities\Point2;
use Modules\Lingkungan\Entities\Point2doc;
use Illuminate\Contracts\Support\Renderable;

class Point2aController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('lingkungan::point2.point2a',[
            'point2s'=>Point2::select()->where('user_id', Auth::user()->id)->get(),
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
        // return ($request);

        // dd($request);

        $query=Point2::select()->get()->count();
            $id=$query+1;
            Point2::create([
                    'id'=>$id,
                    'user_id'=>Auth::user()->id,
                    'jenis'=>$request->jenis,
                    'nomer_surat'=>$request->nomer_surat,
                    'perihal'=>$request->perihal,
                    'divisi'=>$request->divisi,
                    'wulan'=>$request->wulan,
                    'bulan'=>$request->bulan,
                    'tanggal_dibuat'=> $request->tanggal_dibuat,
                    // 'keterangan'=>$request->keterangan,


            ]);
            foreach ($request->point2doc as $key => $value) {
                if ($value['berkas']){
                    $berkas=$value['berkas']->store('dokumen');
                }

                Point2doc::create([
                    'pemenuhan_id'=>$id,
                    'keterangan' => $value['keterangan'],
                    'berkas' => $berkas,

                ]);
            }
        return redirect('/Lingkungan/point2a')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');


    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        // return view('lingkungan::show');
        $Point2doc=Point2doc::select()->where('pemenuhan_id', $id)->get();
        return view('lingkungan::point2.lihat',[
            'point2docs'=>$Point2doc,
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
        return view('lingkungan::point2.edit',[
            'point2'=>Point2::select()->where('id', $id)->get()->first(),
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
        Point2::where('id', $id)->update([
            'id'=>$id,
            'jenis'=>$request->jenis,
            'nomer_surat'=>$request->nomer_surat,
            'perihal'=>$request->perihal,
            'wulan'=>$request->wulan,
            'bulan'=>$request->bulan,
            // 'berkas'=>$request->berkas,
        ]);
        return redirect('Lingkungan/point2a')->with('success', 'Data anda berasil diubah');
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
        Point2::where('id',$id)->delete();
        return redirect('Lingkungan/point2a')->with('success', 'Data anda berasil dihapus');
    }
}
