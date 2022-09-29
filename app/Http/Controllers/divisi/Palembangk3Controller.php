<?php

namespace App\Http\Controllers\divisi;

use Illuminate\Http\Request;
use Modules\K3\Entities\Audit;
use Modules\K3\Entities\Safeti;
use Modules\K3\Entities\Penerapan;
use Modules\K3\Entities\Reporting;
use Modules\K3\Entities\Leadership;
use App\Http\Controllers\Controller;
use Modules\K3\Entities\Comunication;

class Palembangk3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('k3.palembangk3.index',[
        'audits'=> Audit::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->get(),
        'leaderships'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->get(),
        'penerapans'=> Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->get(),
        'safetis'=> Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->get(),
        'comunications'=> Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->get(),
        'reportings'=> Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->get()
        ]);
    }
    // 2022
    public function tw1()
    {
          return view('k3.palembangk3.triwulan.1',[
             'leader'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->where('thn_pembuatan','2022')->get()->first(),
        'audits'=> Audit::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->get(),
        'leaderships'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->get(),
        'penerapans'=> Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->get(),
        'safetis'=> Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->get(),
        'comunications'=> Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->get(),
        'reportings'=> Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->get(),
        ]);
    }
    public function tw2()
    {
          return view('k3.palembangk3.triwulan.2',[
             'leader'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->where('thn_pembuatan','2022')->get()->first(),
        'audits'=> Audit::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->get(),
        'leaderships'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->get(),
        'penerapans'=> Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->get(),
        'safetis'=> Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->get(),
        'comunications'=> Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->get(),
        'reportings'=> Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->get(),
        ]);
    }
    public function tw3()
    {
          return view('k3.palembangk3.triwulan.3',[
             'leader'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->where('thn_pembuatan','2022')->get()->first(),
        'audits'=> Audit::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->get(),
        'leaderships'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->get(),
        'penerapans'=> Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->get(),
        'safetis'=> Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->get(),
        'comunications'=> Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->get(),
        'reportings'=> Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->get(),
        ]);
    }
    public function tw4()
    {
          return view('k3.palembangk3.triwulan.4',[
             'leader'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->where('thn_pembuatan','2022')->get()->first(),
        'audits'=> Audit::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->get(),
        'leaderships'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->get(),
        'penerapans'=> Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->get(),
        'safetis'=> Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->get(),
        'comunications'=> Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->get(),
        'reportings'=> Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->get(),
        ]);
    }
    // 2023
  public function tw12023()
    {
          return view('k3.palembangk3.2023.triwulan.4',[
        'audits'=> Audit::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->where('thn_pembuatan','2023')->get(),
        'leaderships'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->where('thn_pembuatan','2023')->get(),
        'penerapans'=> Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->where('thn_pembuatan','2023')->get(),
        'safetis'=> Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->where('thn_pembuatan','2023')->get(),
        'comunications'=> Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->where('thn_pembuatan','2023')->get(),
        'reportings'=> Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','1')->where('thn_pembuatan','2023')->get(),
        ]);
    }
    public function tw22023()
    {
          return view('k3.palembangk3.2023.triwulan.4',[
        'audits'=> Audit::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->where('thn_pembuatan','2023')->get(),
        'leaderships'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->where('thn_pembuatan','2023')->get(),
        'penerapans'=> Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->where('thn_pembuatan','2023')->get(),
        'safetis'=> Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->where('thn_pembuatan','2023')->get(),
        'comunications'=> Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->where('thn_pembuatan','2023')->get(),
        'reportings'=> Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','2')->where('thn_pembuatan','2023')->get(),
        ]);
    }
    public function tw32023()
    {
          return view('k3.palembangk3.2023.triwulan.4',[
        'audits'=> Audit::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->where('thn_pembuatan','2023')->get(),
        'leaderships'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->where('thn_pembuatan','2023')->get(),
        'penerapans'=> Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->where('thn_pembuatan','2023')->get(),
        'safetis'=> Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->where('thn_pembuatan','2023')->get(),
        'comunications'=> Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->where('thn_pembuatan','2023')->get(),
        'reportings'=> Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','3')->where('thn_pembuatan','2023')->get(),
        ]);
    }
    public function tw42023()
    {
          return view('k3.palembangk3.2023.triwulan.4',[
        'audits'=> Audit::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->where('thn_pembuatan','2023')->get(),
        'leaderships'=> Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->where('thn_pembuatan','2023')->get(),
        'penerapans'=> Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->where('thn_pembuatan','2023')->get(),
        'safetis'=> Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->where('thn_pembuatan','2023')->get(),
        'comunications'=> Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->where('thn_pembuatan','2023')->get(),
        'reportings'=> Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PALEMBANG')->where('triwulan','4')->where('thn_pembuatan','2023')->get(),
        ]);
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
        //
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
        if (request('tw')=='tw1'){
            return view('k3.palembangk3.triwulan.upload1', [
            'leadership'=>Leadership::select()->where('id',$id)->get()->first(),
            ]);
            
        }
        elseif (request('tw')=='tw2'){
            return view('k3.palembangk3.triwulan.upload2', [
            'leadership'=>Leadership::select()->where('id',$id)->get()->first(),
            ]);
            
        }
        elseif (request('tw')=='tw3'){
            return view('k3.palembangk3.triwulan.upload3', [
            'leadership'=>Leadership::select()->where('id',$id)->get()->first(),
            ]);
            
        }
        elseif (request('tw')=='tw4'){
            return view('k3.palembangk3.triwulan.upload4', [
            'leadership'=>Leadership::select()->where('id',$id)->get()->first(),
            ]);
            
        }
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
