<?php

namespace Modules\Lingkungan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Lingkungan\Entities\Point1;
use Modules\Lingkungan\Entities\Point1a;
use Modules\Lingkungan\Entities\Point1doc;
use Illuminate\Contracts\Support\Renderable;

class Point1aController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('lingkungan::point1.point1a',[
            'point1s'=>Point1::select()->where('user_id', Auth::user()->id)->get(),
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

        $query=Point1::select()->get()->count();
            $id=$query+1;
            Point1::create([
                    'id'=>$id,
                    'user_id'=>Auth::user()->id,
                    'jenis'=>$request->jenis,
                    'dok'=>$request->dok,
                    // 'nomer_surat'=>$request->nomer_surat,
                    // 'perihal'=>$request->perihal,
                    'divisi'=>$request->divisi,
                    'wulan'=>$request->wulan,
                    'bulan'=>$request->bulan,
                    'tanggal_dibuat'=> $request->tanggal_dibuat,
                    // 'berkas' =>$request->berkas,
                    // 'keterangan'=>$request->keterangan,


            ]);
            foreach ($request->point1doc as $key => $value) {
                if ($value['berkas']){
                    $berkas=$value['berkas']->store('dokumen');
                }

                Point1doc::create([
                    'pemenuhan_id'=>$id,
                    'keterangan' => $value['keterangan'],
                    'berkas' => $berkas,

                ]);
            }
        return redirect('/Lingkungan/point1a')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');


    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        // return view('lingkungan::show');
        $Point1doc=Point1doc::select()->where('pemenuhan_id', $id)->get();
        return view('lingkungan::point1.lihat',[
            'point1docs'=>$Point1doc,
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
        return view('lingkungan::point1.edit',[
            'point1'=>Point1::select()->where('id', $id)->get()->first(),
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
        Point1::where('id', $id)->update([
            'id'=>$id,
            'jenis'=>$request->jenis,
            'nomer_surat'=>$request->nomer_surat,
            'perihal'=>$request->perihal,
            'wulan'=>$request->wulan,
            'bulan'=>$request->bulan,
            // 'berkas'=>$request->berkas,
        ]);
        return redirect('Lingkungan/point1a')->with('success', 'Data anda berasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        Point1::where('id',$id)->delete();
        return redirect('Lingkungan/point1a')->with('success', 'Data anda berasil dihapus');
    }
}
