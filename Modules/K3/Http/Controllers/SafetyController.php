<?php

namespace Modules\K3\Http\Controllers;

use Illuminate\Http\Request;
use Modules\K3\Entities\Safeti;
use Illuminate\Routing\Controller;
use Modules\K3\Entities\Safetidoc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Support\Renderable;

class SafetyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('k3::safeti.create');
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
          $query=Safeti::select()->get()->count();
             $id=$query+1;
            Safeti::create([
                    'id'=>$id,
                    'user_id'=>Auth::user()->id,
                    'no_kriteria'=>$request->no_kriteria,
                    'tgl_pelaporan'=>$request->tgl_pelaporan,
                     'triwulan'=>$request->triwulan,
                    'sub_kriteria'=>$request->sub_kriteria,
                    'divisi'=>$request->divisi,
                     'thn_pembuatan'=>$request->thn_pembuatan,
                    'level'=> $request->level,
                    // 'catatan'=>$value['catatan'],
                    'status'=>'diajukan',
                    
            ]);
            foreach ($request->safetidoc as $key => $value) {
                if ($value['document']){
                    $document=$value['document']->store('file_k3');
                }
                
                Safetidoc::create([  
                    'safeti_id'=>$id,
                    'keterangan' => $value['keterangan'],
                    'document' => $document,

                ]);
            }
        return redirect('/K3/rkap')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');
    }
    

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('k3::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('k3::edit');
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
