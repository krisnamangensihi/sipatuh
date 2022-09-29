<?php

namespace Modules\K3\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\K3\Entities\Comunication;
use Modules\K3\Entities\Comunicationdoc;
use Illuminate\Contracts\Support\Renderable;

class ComunicationtableController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('k3::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('k3::create');
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
        $comunicationdoc=Comunicationdoc::select()->where('comunication_id', $id )->get();
       return view('k3::comunication.lihat',[
       'comunicationdocs' => $comunicationdoc
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('k3::comunication.edit', [
        'comunication'=>Comunication::select()->where('id',$id)->get()->first(),
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
         {
        Comunication::where('id',$id)->update([
                    'id'=>$id,
                    // 'user_id'=>Auth::user()->id,
                    'no_kriteria'=>$request->no_kriteria,
                    'sub_kriteria'=>$request->sub_kriteria,
                    'level'=> $request->level,
                    // 'status'=>'diajukan',
                    // 'document' => $document,
                    // 'keterangan' => $request->keterangan,
        ]);
        return redirect('K3/rkap')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');
    }
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Comunication::where('id',$id)->delete();
        return redirect('K3/rkap');
    }
}
