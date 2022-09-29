<?php

namespace App\Http\Controllers\Divisibogor;

use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Lingkungan\Entities\P1a;
use Modules\Lingkungan\Entities\P1b;
use Modules\Lingkungan\Entities\P2a;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TtebogorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $terima1b = P1b::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW I')->where('status','disetujui')->get();
        $terimabogors = P1a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW I')->where('status','disetujui')->get();
        $terimabogor = P1a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p1.p1a.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw2()
    {
        //
        $terimabogors = P1a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW II')->where('status','disetujui')->get();
        $terimabogor = P1a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p1.p1a.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw3()
    {
        //
        $terimabogors = P1a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW III')->where('status','disetujui')->get();
        $terimabogor = P1a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p1.p1a.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw4()
    {
        //
        $terimabogors = P1a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW IV')->where('status','disetujui')->get();
        $terimabogor = P1a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p1.p1a.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    //point 1b
    public function tw11b()
    {
        $terimabogors = P1b::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW I')->where('status','disetujui')->get();
        $terimabogor = P1b::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p2.p2b.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw21b()
    {
        $terimabogors = P1b::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW II')->where('status','disetujui')->get();
        $terimabogor = P1b::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p2.p2b.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw31b()
    {
        $terimabogors = P1b::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW III')->where('status','disetujui')->get();
        $terimabogor = P1b::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p1.p1b.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw41b()
    {
        $terimabogors = P1b::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW IV')->where('status','disetujui')->get();
        $terimabogor = P1b::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p1.p1b.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    //point 2a
    public function tw12a()
    {
        $terimabogors = P2a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW I')->where('status','disetujui')->get();
        $terimabogor = P2a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p2.p2b.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw22a()
    {
        $terimabogors = P2a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW II')->where('status','disetujui')->get();
        $terimabogor = P2a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p2.p2b.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw32a()
    {
        $terimabogors = P2a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW III')->where('status','disetujui')->get();
        $terimabogor = P2a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p2.p2b.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
    }

    public function tw42a()
    {
        $terimabogors = P2a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->where('wulan','TW IV')->where('status','disetujui')->get();
        $terimabogor = P1b::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Lingkungan'));
        $pdf = PDF::loadview('adling.updlbogor.p2.p2b.tte', compact('terimabogors','terimabogor','qrcode'));
        return $pdf->stream('Laporan Surat Lingkungan');
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
        // $terimabogor = P1a::select()->where('divisi','PT. PLN (Persero) UPDL BOGOR')->get()->first();
        // $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Chakim haha hihi'));
        // $pdf = PDF::loadview('adling.updlbogor.p1.p1a.tte', compact('terimabogor','qrcode'));
        // return $pdf->stream('Laporan Surat Lingkungan');
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
        // P9a::where('id',$id)->update([
        //     'catatan'=>$request->catatan,
        //     'status'=>$request->status,
        // ]);
        // return redirect('/bogor9a')->with('success', 'Data anda berasil diubah');
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
