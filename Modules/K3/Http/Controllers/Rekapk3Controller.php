<?php

namespace Modules\K3\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\K3\Entities\Audit;
use Modules\K3\Entities\Safeti;
use Modules\K3\Entities\Penerapan;
use Modules\K3\Entities\Reporting;
use Modules\K3\Entities\Leadership;
use Modules\K3\Entities\Comunication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Support\Renderable;
use PDF;
class Rekapk3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // $k3l = K3l::paginate(4); 
        $rekapleadership=Leadership::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $rekapaudit=Audit::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $rekappenerapan=Penerapan::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $rekapsafeti=Safeti::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $rekapcomunication=Comunication::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $rekapreporting=Reporting::select()->where('user_id', Auth::user()->id)->get()->avg('level');
        $p=$rekapleadership+$rekapaudit+$rekappenerapan+$rekapsafeti+$rekapcomunication+$rekapreporting;
        $hitung=$p/6;
        $audit = Audit::select()->where('user_id', Auth::user()->id)->get();
        $leadership = Leadership::select()->where('user_id', Auth::user()->id)->get();
        $leader = Leadership::select()->where('user_id', Auth::user()->id)->get()->first();
        $penerapan = Penerapan::select()->where('user_id', Auth::user()->id)->get();
        $safeti = Safeti::select()->where('user_id', Auth::user()->id)->get();
        $comunication = Comunication::select()->where('user_id', Auth::user()->id)->get();
        $reporting = Reporting::select()->where('user_id', Auth::user()->id)->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        
        $pdf=PDF::loadview ('k3::leadership.rekap', compact('audit','leadership','leader','penerapan','safeti','comunication','reporting','rekapaudit','rekapleadership','rekappenerapan','rekapsafeti','rekapcomunication','rekapreporting','hitung'));
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
