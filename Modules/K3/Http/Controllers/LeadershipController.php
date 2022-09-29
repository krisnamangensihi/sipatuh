<?php

namespace Modules\K3\Http\Controllers;

use Illuminate\Http\Request;
use Modules\K3\Entities\Leadership;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\K3\Entities\Leadershipdoc;
use Illuminate\Contracts\Support\Renderable;

class LeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('k3::leadership.create');
    }
   public function tw1()
    {
        return view('k3::leadership.triwulan.create1');
    }
    public function tw2()
    {
        return view('k3::leadership.triwulan.create2');
    }
    public function tw3()
    {
        return view('k3::leadership.triwulan.create3');
    }
    public function tw4()
    {
            return view('k3::leadership.triwulan.create4');
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
     {
        // dd ($request);
             $query=Leadership::select()->get()->count();
             $id=$query+1;
            Leadership::create([
                    'id'=>$id,
                    'user_id'=>Auth::user()->id,
                    'no_kriteria'=>$request->no_kriteria,
                    'tgl_pelaporan'=>$request->tgl_pelaporan,
                    'thn_pembuatan'=>$request->thn_pembuatan,
                    'triwulan'=>$request->triwulan,
                    'sub_kriteria'=>$request->sub_kriteria,
                    'divisi'=>$request->divisi,
                    'level'=> $request->level,
                    // 'catatan'=>$value['catatan'],
                    'status'=>'diajukan',
                    
            ]);
            foreach ($request->leadershipdoc as $key => $value) {
                if ($value['document']){
                    $document=$value['document']->store('file_k3');
                }
                
                Leadershipdoc::create([
                    'leadership_id'=>$id,
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
        //
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
