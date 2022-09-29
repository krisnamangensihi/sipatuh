<?php

namespace App\Http\Controllers\rekap;

use Illuminate\Http\Request;
use Modules\K3\Entities\Audit;
use Modules\K3\Entities\Safeti;
use Modules\K3\Entities\Penerapan;
use Modules\K3\Entities\Reporting;
use Modules\K3\Entities\Leadership;
use App\Http\Controllers\Controller;
use Modules\K3\Entities\Comunication;

class AdminrekappandaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $k3l = K3l::paginate(4); 
        $rekapleadership=Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get()->avg('level');
        $rekapaudit=Audit::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get()->avg('level');
        $rekappenerapan=Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get()->avg('level');
        $rekapsafeti=Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get()->avg('level');
        $rekapcomunication=Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get()->avg('level');
        $rekapreporting=Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get()->avg('level');
        $p=$rekapleadership+$rekapaudit+$rekappenerapan+$rekapsafeti+$rekapcomunication+$rekapreporting;
        $hitung=$p/6;
        $audit = Audit::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get();
        $leadership = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get();
        $leader = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get()->first();
        $penerapan = Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get();
        $safeti = Safeti::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get();
        $comunication = Comunication::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get();
        $reporting = Reporting::select()->where('divisi','PT. PLN (Persero) UPDL PANDAAN')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        
        $pdf=PDF::loadview ('k3.pandaank3.rekap', compact('audit','leadership','leader','penerapan','safeti','comunication','reporting','rekapaudit','rekapleadership','rekappenerapan','rekapsafeti','rekapcomunication','rekapreporting','hitung'));
       return $pdf->stream('Laporan Surat K3.pdf');
        // return view('k3.bogork3.rekap',[
        //     // 'nilaileader'=>$a,
        //     'scoring'=>$hitung,
        //     'leadership'=>$leadership,
        //     'audit' =>$audit,
        //     'penerapan'=>$penerapan,
        //     // 'leaderships'=> Leadership::select()->where('user_id', Auth::user()->id)->get(),
        //     // 'audits'=> Audit::select()->where('user_id', Auth::user()->id)->get(),
        //     // 'penerapans'=> Penerapan::select()->where('user_id', Auth::user()->id)->get(),
        //     // 'safetis'=> Safeti::select()->where('user_id', Auth::user()->id)->get(),
        //     // 'comunications'=> Comunication::select()->where('user_id', Auth::user()->id)->get(),
        //     // 'reportings'=> Reporting::select()->where('user_id', Auth::user()->id)->get(),
            
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
        //
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
