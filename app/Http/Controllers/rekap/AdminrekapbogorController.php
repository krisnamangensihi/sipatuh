<?php

namespace App\Http\Controllers\rekap;

use PDF;
use Illuminate\Http\Request;
use Modules\K3\Entities\Audit;
use Modules\K3\Entities\Safeti;
use Modules\K3\Entities\Penerapan;
use Modules\K3\Entities\Reporting;
use Modules\K3\Entities\Leadership;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\K3\Entities\Comunication;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AdminrekapbogorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // $k3l = K3l::paginate(4); 
        $rekapleadership=Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->avg('level');
        $rekapaudit=Audit::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->avg('level');
        $rekappenerapan=Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->avg('level');
        $rekapsafeti=Safeti::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->avg('level');
        $rekapcomunication=Comunication::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->avg('level');
        $rekapreporting=Reporting::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->avg('level');
        $p=$rekapleadership+$rekapaudit+$rekappenerapan+$rekapsafeti+$rekapcomunication+$rekapreporting;
        $hitung=$p/6;
        $audit = Audit::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get();
        $leadership = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get();
        $leader = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get();
        $penerapan = Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get();
        $safeti = Safeti::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get();
        $comunication = Comunication::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get();
        $reporting = Reporting::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        $pdf=PDF::loadview ('k3.bogork3.rekap', compact('audit','leadership','leader','penerapan','safeti','comunication','reporting','rekapaudit','rekapleadership','rekappenerapan','rekapsafeti','rekapcomunication','rekapreporting','hitung'));
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
    public function tw1()
    {
       
        // $k3l = K3l::paginate(4); 
        $rekapleadership=Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get()->avg('level');
        $rekapaudit=Audit::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get()->avg('level');
        $rekappenerapan=Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get()->avg('level');
        $rekapsafeti=Safeti::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get()->avg('level');
        $rekapcomunication=Comunication::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get()->avg('level');
        $rekapreporting=Reporting::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get()->avg('level');
        $p=$rekapleadership+$rekapaudit+$rekappenerapan+$rekapsafeti+$rekapcomunication+$rekapreporting;
        $hitung=$p/6;
        $audit = Audit::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get();
        $leadership = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get();
        $leader = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get()->first();
        $leaders = Leadership::select()->where('name')->get()->first();
        $leadersh = Leadership::select()->where('nip')->get()->first();
        $penerapan = Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get();
        $safeti = Safeti::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get();
        $comunication = Comunication::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get();
        $reporting = Reporting::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','1')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        $pdf=PDF::loadview ('k3.bogork3.triwulan.rekap1', compact('audit','leadership','leader','penerapan','safeti','comunication','reporting','rekapaudit','rekapleadership','rekappenerapan','rekapsafeti','rekapcomunication','rekapreporting','hitung'));
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
    public function tw2()
    {
       
        // $k3l = K3l::paginate(4); 
        $rekapleadership=Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get()->avg('level');
        $rekapaudit=Audit::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get()->avg('level');
        $rekappenerapan=Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get()->avg('level');
        $rekapsafeti=Safeti::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get()->avg('level');
        $rekapcomunication=Comunication::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get()->avg('level');
        $rekapreporting=Reporting::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get()->avg('level');
        $p=$rekapleadership+$rekapaudit+$rekappenerapan+$rekapsafeti+$rekapcomunication+$rekapreporting;
        $hitung=$p/6;
        $audit = Audit::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get();
        $leadership = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get();
        $leader = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->where('triwulan','2')->first();
        $penerapan = Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get();
        $safeti = Safeti::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get();
        $comunication = Comunication::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get();
        $reporting = Reporting::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','2')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        $pdf=PDF::loadview ('k3.bogork3.triwulan.rekap2', compact('audit','leadership','leader','penerapan','safeti','comunication','reporting','rekapaudit','rekapleadership','rekappenerapan','rekapsafeti','rekapcomunication','rekapreporting','hitung'));
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
    public function tw3()
    {
       
        // $k3l = K3l::paginate(4); 
        $rekapleadership=Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get()->avg('level');
        $rekapaudit=Audit::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get()->avg('level');
        $rekappenerapan=Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get()->avg('level');
        $rekapsafeti=Safeti::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get()->avg('level');
        $rekapcomunication=Comunication::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get()->avg('level');
        $rekapreporting=Reporting::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get()->avg('level');
        $p=$rekapleadership+$rekapaudit+$rekappenerapan+$rekapsafeti+$rekapcomunication+$rekapreporting;
        $hitung=$p/6;
        $audit = Audit::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get();
        $leadership = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get();
        $leader = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->where('triwulan','3')->first();
        $penerapan = Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get();
        $safeti = Safeti::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get();
        $comunication = Comunication::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get();
        $reporting = Reporting::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','3')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        $pdf=PDF::loadview ('k3.bogork3.triwulan.rekap3', compact('audit','leadership','leader','penerapan','safeti','comunication','reporting','rekapaudit','rekapleadership','rekappenerapan','rekapsafeti','rekapcomunication','rekapreporting','hitung'));
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
    public function tw4()
    {
       
        // $k3l = K3l::paginate(4); 
        $rekapleadership=Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get()->avg('level');
        $rekapaudit=Audit::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get()->avg('level');
        $rekappenerapan=Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get()->avg('level');
        $rekapsafeti=Safeti::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get()->avg('level');
        $rekapcomunication=Comunication::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get()->avg('level');
        $rekapreporting=Reporting::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get()->avg('level');
        $p=$rekapleadership+$rekapaudit+$rekappenerapan+$rekapsafeti+$rekapcomunication+$rekapreporting;
        $hitung=$p/6;
        $audit = Audit::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get();
        $leadership = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get();
        $leader = Leadership::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->where('triwulan','4')->first();
        $penerapan = Penerapan::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get();
        $safeti = Safeti::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get();
        $comunication = Comunication::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get();
        $reporting = Reporting::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('triwulan','4')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        $pdf=PDF::loadview ('k3.bogork3.triwulan.rekap4', compact('audit','leadership','leader','penerapan','safeti','comunication','reporting','rekapaudit','rekapleadership','rekappenerapan','rekapsafeti','rekapcomunication','rekapreporting','hitung'));
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
