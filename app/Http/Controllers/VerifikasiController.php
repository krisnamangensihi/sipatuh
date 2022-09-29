<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;
use Illuminate\Http\Request;
use Modules\K3\Entities\Leadership;
use Illuminate\Support\Facades\Auth;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //    return view('k3.bogork3.triwulan.1',[
        //        'verifikasis'=> Verifikasi::select()->where('verifikasi','tw1')->get(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
            'document' => 'required',
        ]);
            $document=$request->file('document')->store('file_k3');
        if($request->file('document')){
            $document;
        }
             $query=Verifikasi::select()->get()->count();
             $id=$query+1;
            Verifikasi::create([
                    'Leadership_id'=>$id,
                    'user_id'=>Auth::user()->id,
                    'name'=>$request->name,
                    'nip'=>$request->nip,
                     'document'=>$document,  
            ]);
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            
         $request->validate([
            'document' => 'required',
        ]);
            $document=$request->file('document')->store('file_k3');
        if($request->file('document')){
            $document;
        }
        Leadership::where('id',$id)->update([
            'verifikasi'=>$request->verifikasi,
            'name'=>$request->name,
            'nip'=>$request->nip,
            'document'=>$document,
            
        ]);
        return back()->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
