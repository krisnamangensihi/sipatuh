<?php

namespace Modules\K3\Http\Controllers;

use App\Models\Role;
// use Modules\K3\Entities\K3l;
use Illuminate\Http\Request;
use Modules\K3\Entities\Audit;
use Modules\K3\Entities\Safeti;
use Modules\K3\Entities\datak3l;
use Modules\K3\Entities\Auditdoc;
use Modules\K3\Entities\Penerapan;
use Modules\K3\Entities\Pengajuan;
use Modules\K3\Entities\Reporting;
use Modules\K3\Entities\Leadership;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\K3\Entities\Comunication;
use Modules\K3\Entities\Leadershipdoc;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;

class RkapController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
       
        return view('k3::leadership.rkap',[
            'leaderships'=> Leadership::select()->where('user_id', Auth::user()->id)->get(),
            'audits'=> Audit::select()->where('user_id', Auth::user()->id)->get(),
            'penerapans'=> Penerapan::select()->where('user_id', Auth::user()->id)->get(),
            'safetis'=> Safeti::select()->where('user_id', Auth::user()->id)->get(),
            'comunications'=> Comunication::select()->where('user_id', Auth::user()->id)->get(),
            'reportings'=> Reporting::select()->where('user_id', Auth::user()->id)->get(),
            
        ]);
    }
    public function tw1()
    {
       
        return view('k3::leadership.rkap',[
            'leaderships'=> Leadership::select()->where('user_id', Auth::user()->id)->where('triwulan','1')->get(),
            'audits'=> Audit::select()->where('user_id', Auth::user()->id)->get(),
            'penerapans'=> Penerapan::select()->where('user_id', Auth::user()->id)->get(),
            'safetis'=> Safeti::select()->where('user_id', Auth::user()->id)->get(),
            'comunications'=> Comunication::select()->where('user_id', Auth::user()->id)->get(),
            'reportings'=> Reporting::select()->where('user_id', Auth::user()->id)->get(),
            
        ]);
    }
    public function tw2()
    {
        
        return view('k3::leadership.rkap',[
            'leaderships'=> Leadership::select()->where('user_id', Auth::user()->id)->where('triwulan','2')->get(),
            'audits'=> Audit::select()->where('user_id', Auth::user()->id)->get(),
            'penerapans'=> Penerapan::select()->where('user_id', Auth::user()->id)->get(),
            'safetis'=> Safeti::select()->where('user_id', Auth::user()->id)->get(),
            'comunications'=> Comunication::select()->where('user_id', Auth::user()->id)->get(),
            'reportings'=> Reporting::select()->where('user_id', Auth::user()->id)->get(),
            
        ]);
    }
    public function tw3()
    {
       
        return view('k3::leadership.rkap',[
            'leaderships'=> Leadership::select()->where('user_id', Auth::user()->id)->where('triwulan','3')->get(),
            'audits'=> Audit::select()->where('user_id', Auth::user()->id)->get(),
            'penerapans'=> Penerapan::select()->where('user_id', Auth::user()->id)->get(),
            'safetis'=> Safeti::select()->where('user_id', Auth::user()->id)->get(),
            'comunications'=> Comunication::select()->where('user_id', Auth::user()->id)->get(),
            'reportings'=> Reporting::select()->where('user_id', Auth::user()->id)->get(),
            
        ]);
    }
    public function tw4()
    {
       
        return view('k3::leadership.rkap',[
            'leaderships'=> Leadership::select()->where('user_id', Auth::user()->id)->where('triwulan','4')->get(),
            'audits'=> Audit::select()->where('user_id', Auth::user()->id)->get(),
            'penerapans'=> Penerapan::select()->where('user_id', Auth::user()->id)->get(),
            'safetis'=> Safeti::select()->where('user_id', Auth::user()->id)->get(),
            'comunications'=> Comunication::select()->where('user_id', Auth::user()->id)->get(),
            'reportings'=> Reporting::select()->where('user_id', Auth::user()->id)->get(),
            
        ]);
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
        $leadershipdoc=Leadershipdoc::select()->where('leadership_id', $id )->get();
       return view('k3::leadership.lihat',[
       'leadershipdocs'=>$leadershipdoc,
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {   
        
        return view('k3::leadership.edit', [
        'leadership'=>Leadership::select()->where('id',$id)->get()->first(),
        'leadershipdocs'=>Leadershipdoc::select()->where('leadership_id',$id)->get(),
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
            
        Leadership::where('id',$id)->update([
                    // 'id'=>$id,
                    // 'user_id'=>Auth::user()->id,
                    'no_kriteria'=>$request->no_kriteria,
                    'sub_kriteria'=>$request->sub_kriteria,
                    'level'=> $request->level,
                    'status'=>$request->status,
                    'verifikasi'=>$request->verifikasi,
                    // 'document' => $document,
                    // 'keterangan' => $request->keterangan,
        ]);
        // return $request;

       foreach ($request->leadershipdoc as $key => $value) {
            if ($value['document']) {
           

                $document = $value['document']->store('file_k3');

                Leadershipdoc::create([
                    'leadership_id' => $id,
                    'keterangan' => $value['keterangan'],
                    'document' => $document,
                ]);
            }
             return redirect('/K3/rkap')->with('success', 'Pengajuan Anda Sedang Di Proses Silahkan Hubungi AO'); 
        }
    }
}

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        
         Leadership::where('id',$id)->delete();
         Leadershipdoc::where('leadership_id',$id)->delete();
        //  Audit::where('id',$id)->delete();
        return redirect('/K3/rkap');
    }
}
