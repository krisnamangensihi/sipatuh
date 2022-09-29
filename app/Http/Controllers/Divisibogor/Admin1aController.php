<?php

namespace App\Http\Controllers\Divisibogor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Lingkungan\Entities\P1a;

class Admin1aController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('adling.updlbogor.p1.p1a.p1a', [
            'p1as' => P1a::select()->where('divisi', 'PT. PLN (Persero) UPDL BOGOR')->get(),
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
        return view('adling.updlbogor.p1.p1a.lihat1a', [
            'p1a' => P1a::select()->where('id', $id)->get()->first(),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (request('tw') == 'tw1') {
            return view('adling.updlbogor.p1.p1a.upload1', [
                'p1a' => P1a::select()->where('id', $id)->get()->first(),
            ]);
        }
        if (request('wulan') == 'tw2') {
            return view('adling.updlbogor.p1.p1a.upload2', [
                'p1a' => P1a::select()->where('id', $id)->get()->first(),
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
        //
        // $document = $request->file('dokumen')->store('dokumen');
        // if ($request->file('dokumen')) {
        //     $document;
        // }

        P1a::where('id', $id)->update([
            'catatan' => $request->catatan,
            'status' => $request->status,
            'verifikasi' => $request->verifikasi,
            'name' => $request->name,
            'nip' => $request->nip,
            // 'dokumen'=>$document,
        ]);
        return redirect('/admin1a')->with('success', 'Data anda berasil diubah');
        // return back()->with('success','Verikasi Berhasil');
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
