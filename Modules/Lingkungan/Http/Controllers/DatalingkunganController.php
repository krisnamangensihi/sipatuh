<?php

namespace Modules\Lingkungan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Lingkungan\Entities\Point1;
use Modules\Lingkungan\Entities\Point2;
use Modules\Lingkungan\Entities\Point3;
use Illuminate\Contracts\Support\Renderable;
use Modules\Lingkungan\Entities\Datalingkungan;

class DatalingkunganController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('lingkungan::datalingkungan', [
            // 'datalingkungans'=>Datalingkungan::all(),
            'point1s'=>Point1::select()->where('user_id', Auth::user()->id)->get(),
            'point2s'=>Point2::select()->where('user_id', Auth::user()->id)->get(),
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

        // $document=$request->file('berkas')->store('document_datalingkungan');
        // if($request->file('berkas')){
        //     $document;
        // }
        // Datalingkungan::create([
        //     'jenis'=>$request->jenis,
        //     'dok'=>$request->dok,
        //     'tanggal_dibuat'=> $request->tanggal_dibuat,
        //     'berkas'=> $document,
        //     'keterangan'=>$request->keterangan

        // ]);
        // return redirect()->back()->with('status', 'File berhasil diupload');
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
        // Datalingkungan::select()->where('id', $id)->delete();
        //$datalingkungan = Lampiran::find($id);
        // if ($lampiran->dokumen){
        //     Storage::delete($lampiran->dokumen);
        // }
        // $lampiran->delete();
        // return redirect('/Lingkungan/datalingkungan');
    }
}
