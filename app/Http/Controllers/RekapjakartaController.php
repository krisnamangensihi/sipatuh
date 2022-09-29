<?php


namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Keamanan\Entities\Lapor;
use Modules\Keamanan\Entities\Sosial;
use Modules\Keamanan\Entities\Kerawanan;
use Modules\Keamanan\Entities\Pelatihan;
use Modules\Keamanan\Entities\Pengamanan;
use Modules\Keamanan\Entities\Kepemimpinan;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class RekapjakartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $k3l = K3l::paginate(4); 
        $rekapkepemimpinan=Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->get()->avg('level');
        $rekapsosial=Sosial::select()->where('divisi','UPDL JAKARTA')->get()->avg('level');
        $rekappengamanan=Pengamanan::select()->where('divisi','UPDL JAKARTA')->get()->avg('level');
        $rekapkerawanan=Kerawanan::select()->where('divisi','UPDL JAKARTA')->get()->avg('level');
        $rekappelatihan=Pelatihan::select()->where('divisi','UPDL JAKARTA')->get()->avg('level');
        $rekaplapor=Lapor::select()->where('divisi','UPDL JAKARTA')->get()->avg('level');
        $p=$rekapkepemimpinan+$rekapsosial+$rekappengamanan+$rekapkerawanan+$rekappelatihan+$rekaplapor;
        $hitung=$p/6;
        $sosial = sosial::select()->where('divisi','UPDL JAKARTA')->get();
        $kepemimpinan = Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->get();
        $kepim = Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->get()->first();
        $pengamanan = Pengamanan::select()->where('divisi','UPDL JAKARTA')->get();
        $kerawanan = Kerawanan::select()->where('divisi','UPDL JAKARTA')->get();
        $pelatihan = Pelatihan::select()->where('divisi','UPDL JAKARTA')->get();
        $lapor = Lapor::select()->where('divisi','UPDL JAKARTA')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Keamanan'));
        $pdf=PDF::loadview ('keamanan.jakartakeamanan.rekap', compact('kepemimpinan','kepim','sosial','pengamanan','kerawanan','pelatihan','lapor','rekapsosial','rekapkepemimpinan','rekappengamanan','rekapkerawanan','rekappelatihan','rekaplapor','hitung','qrcode'));
        return $pdf->stream('Laporan Surat Keamanan.pdf');
    }
     public function tw1()
    {
        $rekapkepemimpinan=Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get()->avg('level');
        $rekapsosial=Sosial::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get()->avg('level');
        $rekappengamanan=Pengamanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get()->avg('level');
        $rekapkerawanan=Kerawanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get()->avg('level');
        $rekappelatihan=Pelatihan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get()->avg('level');
        $rekaplapor=Lapor::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get()->avg('level');
        $p=$rekapkepemimpinan+$rekapsosial+$rekappengamanan+$rekapkerawanan+$rekappelatihan+$rekaplapor;
        $hitung=$p/6;
        $sosial = sosial::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get();
        $kepemimpinan = Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get();
        $kepim = Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get()->first();
        $pengamanan = Pengamanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get();
        $kerawanan = Kerawanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get();
        $pelatihan = Pelatihan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get();
        $lapor = Lapor::select()->where('divisi','UPDL JAKARTA')->where('triwulan','1')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Keamanan'));
        $pdf=PDF::loadview ('keamanan.jakartakeamanan.tw.rekaptw1', compact('kepemimpinan','kepim','sosial','pengamanan','kerawanan','pelatihan','lapor','rekapsosial','rekapkepemimpinan','rekappengamanan','rekapkerawanan','rekappelatihan','rekaplapor','hitung','qrcode'));
        return $pdf->stream('Laporan Surat Keamanan.pdf');
    }
     public function tw2()
    {
        $rekapkepemimpinan=Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get()->avg('level');
        $rekapsosial=Sosial::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get()->avg('level');
        $rekappengamanan=Pengamanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get()->avg('level');
        $rekapkerawanan=Kerawanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get()->avg('level');
        $rekappelatihan=Pelatihan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get()->avg('level');
        $rekaplapor=Lapor::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get()->avg('level');
        $p=$rekapkepemimpinan+$rekapsosial+$rekappengamanan+$rekapkerawanan+$rekappelatihan+$rekaplapor;
        $hitung=$p/6;
        $sosial = sosial::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get();
        $kepemimpinan = Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get();
        $kepim = Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get()->first();
        $pengamanan = Pengamanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get();
        $kerawanan = Kerawanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get();
        $pelatihan = Pelatihan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get();
        $lapor = Lapor::select()->where('divisi','UPDL JAKARTA')->where('triwulan','2')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Keamanan'));
        $pdf=PDF::loadview ('keamanan.jakartakeamanan.tw.rekaptw2', compact('kepemimpinan','kepim','sosial','pengamanan','kerawanan','pelatihan','lapor','rekapsosial','rekapkepemimpinan','rekappengamanan','rekapkerawanan','rekappelatihan','rekaplapor','hitung','qrcode'));
        return $pdf->stream('Laporan Surat Keamanan.pdf');
    }
     public function tw3()
    {
        $rekapkepemimpinan=Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get()->avg('level');
        $rekapsosial=Sosial::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get()->avg('level');
        $rekappengamanan=Pengamanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get()->avg('level');
        $rekapkerawanan=Kerawanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get()->avg('level');
        $rekappelatihan=Pelatihan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get()->avg('level');
        $rekaplapor=Lapor::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get()->avg('level');
        $p=$rekapkepemimpinan+$rekapsosial+$rekappengamanan+$rekapkerawanan+$rekappelatihan+$rekaplapor;
        $hitung=$p/6;
        $sosial = sosial::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get();
        $kepemimpinan = Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get();
        $kepim = Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get()->first();
        $pengamanan = Pengamanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get();
        $kerawanan = Kerawanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get();
        $pelatihan = Pelatihan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get();
        $lapor = Lapor::select()->where('divisi','UPDL JAKARTA')->where('triwulan','3')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Keamanan'));
        $pdf=PDF::loadview ('keamanan.jakartakeamanan.tw.rekaptw3', compact('kepemimpinan','kepim','sosial','pengamanan','kerawanan','pelatihan','lapor','rekapsosial','rekapkepemimpinan','rekappengamanan','rekapkerawanan','rekappelatihan','rekaplapor','hitung','qrcode'));
        return $pdf->stream('Laporan Surat Keamanan.pdf');
    }
     public function tw4()
    {
        $rekapkepemimpinan=Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get()->avg('level');
        $rekapsosial=Sosial::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get()->avg('level');
        $rekappengamanan=Pengamanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get()->avg('level');
        $rekapkerawanan=Kerawanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get()->avg('level');
        $rekappelatihan=Pelatihan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get()->avg('level');
        $rekaplapor=Lapor::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get()->avg('level');
        $p=$rekapkepemimpinan+$rekapsosial+$rekappengamanan+$rekapkerawanan+$rekappelatihan+$rekaplapor;
        $hitung=$p/6;
        $sosial = sosial::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get();
        $kepemimpinan = Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get();
        $kepim = Kepemimpinan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get()->first();
        $pengamanan = Pengamanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get();
        $kerawanan = Kerawanan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get();
        $pelatihan = Pelatihan::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get();
        $lapor = Lapor::select()->where('divisi','UPDL JAKARTA')->where('triwulan','4')->get();
        // $nama_user=$id=$user_id;
        // return $hitung;
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Admin Keamanan'));
        $pdf=PDF::loadview ('keamanan.keamanan.tw.rekaptw1', compact('kepemimpinan','kepim','sosial','pengamanan','kerawanan','pelatihan','lapor','rekapsosial','rekapkepemimpinan','rekappengamanan','rekapkerawanan','rekappelatihan','rekaplapor','hitung','qrcode'));
        return $pdf->stream('Laporan Surat Keamanan.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
