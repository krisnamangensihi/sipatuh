<?php

namespace Modules\Lingkungan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Lingkungan\Entities\P5b;
use Illuminate\Contracts\Support\Renderable;

class P5bController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // return view('lingkungan::p5.p5b.p5b');
        return view('lingkungan::p5.p5b.p5b',[
            'p5bs' => P5b::select()->where('user_id', Auth::user()->id)->get(),
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
        $query = P5b::select()->get()->count();
        $id = $query + 1;
        P5b::create([
            'id' => $id,
            'user_id' => Auth::user()->id,
            // 'nama' => $request->nama,
            // 'nomer_surat' => $request->nomer_surat,
            'perihal' => $request->perihal,
            'divisi' => $request->divisi,
            'wulan' => $request->wulan,
            'bulan' => $request->bulan,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'berkas' => $document,
            'keterangan' => $request->keterangan,
            'status' => 'diajukan',

        ]);
        return redirect('/Lingkungan/p5b')->with('status', 'File berhasil diupload');
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
        return view('lingkungan::p5.p5b.edit',[
            'p5b'=>P5b::select()->where('id', $id)->get()->first(),
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
        P5b::where('id', $id)->update([
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
        return redirect('Lingkungan/p5b')->with('success', 'Data anda berasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        P5b::where('id',$id)->delete();
        return redirect('/Lingkungan/p5b')->with('success', 'Data anda berasil dihapus');
    }
}
