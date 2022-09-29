<?php

namespace Modules\Lingkungan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Lingkungan\Entities\P5d;
use Illuminate\Contracts\Support\Renderable;

class P5dController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // return view('lingkungan::p5.p5d.p5d');
        return view('lingkungan::p5.p5d.p5d', [
            'p5ds' => P5d::select()->where('user_id', Auth::user()->id)->get(),
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
        $document = $request->file('berkas')->store('dokumen');
        if ($request->file('berkas')) {
            $document;
        }
        $query=P5d::select()->get()->count();
            $id=$query+1;
        P5d::create([
            'id' => $id,
            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'nomer_surat' => $request->nomer_surat,
            // 'perihal' => $request->perihal,
            'divisi' => $request->divisi,
            'wulan' => $request->wulan,
            'bulan' => $request->bulan,
            'periode' => $request->periode,
            'berkas' => $document,
            'keterangan' => $request->keterangan,
            'status' => 'diajukan',

        ]);
        return redirect('/Lingkungan/p5d')->with('status', 'File berhasil diupload');
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
        // return view('lingkungan::edit');
        return view('lingkungan::p5.p5d.edit',[
            'p5d'=>P5d::select()->where('id', $id)->get()->first(),
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
        P5d::where('id', $id)->update([
            'id'=>$id,
            // 'jenis'=>$request->jenis,
            'nama'=>$request->nama,
            'nomer_surat'=>$request->nomer_surat,
            // 'perihal'=>$request->perihal,
            'divisi'=>$request->divisi,
            'periode'=>$request->periode,
            'wulan'=>$request->wulan,
            'bulan'=>$request->bulan,
            'status'=>$request->status,
            'keterangan'=>$request->keterangan,
            'catatan'=>$request->catatan,
        ]);
        return redirect('Lingkungan/p5d')->with('success', 'Data anda berasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        P5d::where('id',$id)->delete();
        return redirect('Lingkungan/p5d')->with('success', 'Data anda berasil dihapus');
    }
}
