<?php

namespace Modules\Lingkungan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Lingkungan\Entities\P5a;
use Modules\Lingkungan\Entities\P5adoc;
use Illuminate\Contracts\Support\Renderable;

class P5aController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // return view('lingkungan::p5.p5a.p5a');
        return view('lingkungan::p5.p5a.p5a',[
            'p5as' => P5a::select()->where('user_id', Auth::user()->id)->get(),
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
        // $document = $request->file('berkas')->store('dokumen');
        // if ($request->file('berkas')) {
        //     $document;
        // }
        // $query = P5a::select()->get()->count();
        // $id = $query + 1;
        // P5a::create([
        //     'id' => $id,
        //     'user_id' => Auth::user()->id,
        //     // 'nama' => $request->nama,
        //     // 'nomer_surat' => $request->nomer_surat,
        //     'perihal' => $request->perihal,
        //     'divisi' => $request->divisi,
        //     'wulan' => $request->wulan,
        //     'bulan' => $request->bulan,
        //     'tanggal_dibuat' => $request->tanggal_dibuat,
        //     'berkas' => $document,
        //     'dokumen1' => $document,
        //     'dokumen2' => $document,
        //     'dokumen3' => $document,
        //     'keterangan' => $request->keterangan,
        //     'status' => 'diajukan',

        // ]);
        // return redirect('/Lingkungan/p5a')->with('status', 'File berhasil diupload');

        $query=P5a::select()->get()->count();
            $id=$query+1;
            P5a::create([
                    'id'=>$id,
                    'user_id'=>Auth::user()->id,
                    // 'jenis'=>$request->jenis,
                    // 'nomer_surat'=>$request->nomer_surat,
                    'perihal'=>$request->perihal,
                    'divisi'=>$request->divisi,
                    'wulan'=>$request->wulan,
                    'bulan'=>$request->bulan,
                    'tanggal_dibuat'=> $request->tanggal_dibuat,
                    // 'keterangan'=>$request->keterangan,
                    'status' => 'diajukan',


            ]);
            foreach ($request->p5adoc as $key => $value) {
                if ($value['berkas']){
                    $berkas=$value['berkas']->store('dokumen');
                }

                P5adoc::create([
                    'pemenuhan_id'=>$id,
                    'keterangan' => $value['keterangan'],
                    'berkas' => $berkas,

                ]);
            }
        return redirect('/Lingkungan/p5a')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        // return view('lingkungan::show');
        $P5adoc=P5adoc::select()->where('pemenuhan_id', $id)->get();
        return view('lingkungan::p5.p5a.lihat',[
            'p5adocs'=>$P5adoc,
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
        return view('lingkungan::p5.p5a.edit',[
            'p5a'=>P5a::select()->where('id', $id)->get()->first(),
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
        P5a::where('id', $id)->update([
            'id'=>$id,
            // 'jenis'=>$request->jenis,
            // 'nomer_surat'=>$request->nomer_surat,
            'perihal'=>$request->perihal,
            'divisi'=>$request->divisi,
            'wulan'=>$request->wulan,
            'bulan'=>$request->bulan,
            'status'=>$request->status,
            // 'keterangan'=>$request->keterangan,
            'catatan'=>$request->catatan,
        ]);
        return redirect('Lingkungan/p5a')->with('success', 'Data anda berasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        P5a::where('id',$id)->delete();
        return redirect('/Lingkungan/p5a')->with('success', 'Data anda berasil dihapus');
    }
}
