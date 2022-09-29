<?php

namespace Modules\Keamanan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Keamanan\Entities\Lapor;
use Modules\Keamanan\Entities\Lapordoc;
use Illuminate\Contracts\Support\Renderable;

class LaporController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('keamanan::lapor.create');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('keamanan::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $query=Lapor::select()->get()->count();
             $id=$query+1;
            Lapor::create([
                    'id'=>$id,
                    'user_id'=>Auth::user()->id,
                    'no_kriteria'=>$request->no_kriteria,
                    'sub_kriteria'=>$request->sub_kriteria,
                    'divisi'=>$request->divisi,
                    'level'=> $request->level,
                    'triwulan'=> $request->triwulan,
                    'tanggal'=> $request->tanggal,
                    // 'catatan'=>$value['catatan'],
                    'status'=>'diajukan',
                    
            ]);
            foreach ($request->lapordoc as $key => $value) {
                if ($value['document']){
                    $document=$value['document']->store('file_keamanan');
                }
                
                Lapordoc::create([
                    'lapor_id'=>$id,
                    'keterangan' => $value['keterangan'],
                    'document' => $document,

                ]);
            }
        return redirect('/Keamanan/datakeamanan')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $lapordoc=Lapordoc::select()->where('lapor_id', $id)->get();
        return view('keamanan::lapor.lihat',[
            'lapordocs'=>$lapordoc,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
       return view('keamanan::lapor.edit', [
        'lapor'=>Lapor::select()->where('id',$id)->get()->first(),
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
        Lapor::where('id',$id)->update([
                     // 'id'=>$id,
                    // 'user_id'=>Auth::user()->id,
                    'no_kriteria'=>$request->no_kriteria,
                    'sub_kriteria'=>$request->sub_kriteria,
                    'level'=> $request->level,
                    'status'=>$request->status,
                    // 'document'=>$request->document,
                    // 'status'=>'diajukan',
                    // 'document' => $document,
                    // 'keterangan' => $request->keterangan,
        ]);
        
        return redirect('Keamanan/datakeamanan')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Lapor::where('id',$id)->delete();
        return redirect('/Keamanan/datakeamanan')->with('success', 'Data anda berasil dihapus');
    }
}
