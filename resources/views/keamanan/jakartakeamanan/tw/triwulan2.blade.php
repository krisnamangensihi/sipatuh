@extends('tablelay.table')
@section('tittle')
    UPDL JAKARTA
@endsection
@section('content')
    {{-- kepemimpinan --}}
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0"><strong>Maturity Level Keamanan</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        {{-- <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="/cetakbogor"target="blank"><i class="me-1"
                                        data-feather="check-square"></i><span class="align-middle">Cetak Pdf</span></a>
                                <a class="dropdown-item" href="/bogorkeamanantw1"target="blank"><i class="me-1"
                                        data-feather="check-square"></i><span class="align-middle">Triwulan 1</span></a>
                                <a class="dropdown-item" href="/bogorkeamanantw2"target="blank"><i class="me-1"
                                        data-feather="check-square"></i><span class="align-middle">Triwulan 2</span></a>
                                <a class="dropdown-item" href="/bogorkeamanantw3"target="blank"><i class="me-1"
                                        data-feather="check-square"></i><span class="align-middle">Triwulan 3</span></a>
                                <a class="dropdown-item" href="/bogorkeamanantw4"target="blank"><i class="me-1"
                                        data-feather="check-square"></i><span class="align-middle">Triwulan 4</span></a>
                            </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div>
            {{-- <a href="{{ route('cetakpdfbogor') }}" class="btn btn-primary" id="type-update"
onclick="return confirm('Apakah anda yakin ingin mengedit data?')"target="blank">Simpan</a> --}}
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <h4 class="col-12"><b>Kepemimpinan dan Komitmen Manajemen</b></h4>
                            </div>
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Unit</th>
                                        <th class="text-center">Sub Kriteria</th>
                                        <th class="text-center">Level</th>
                                        <th class="text-center">Triwulan</th>
                                        <th class="text-center">Document</th>
                                        <th class="text-center">catatan</th>
                                        <th class="text-center">status</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kepemimpinans as $kepemimpinan)
                                        <tr>
                                            <td></td>
                                            <td class="text-justify">
                                                <h5>{{ $kepemimpinan->no_kriteria }}</h5>
                                            </td>
                                            <td class="text-justify"><strong>{{ $kepemimpinan->divisi }}</strong></td>
                                            <td class="text-justify"><strong>{{ $kepemimpinan->sub_kriteria }}</strong></td>
                                            <td class="text-center"><strong>{{ $kepemimpinan->level }}</strong></td>
                                            <td class="text-center"><strong>{{ $kepemimpinan->triwulan }}</strong></td>
                                            <td class="text-center">
                                                <a
                                                    href="/kepemimpinan/{{ $kepemimpinan->id }}"class="btn btn-icon rounded-circle btn-primary btn-sm"><span
                                                        data-feather="eye"></span></a>
                                            </td>

                                            <td class="text-justify"><strong>{{ $kepemimpinan->catatan }}</strong></td>
                                            <td class="text-center">
                                                @if ($kepemimpinan->status == 'diajukan')
                                                    <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                                @elseif ($kepemimpinan->status == 'tindaklanjut')
                                                    <span class="badge rounded-pill  badge-light-primary">Tindak
                                                        Lanjut</span>
                                                @elseif ($kepemimpinan->status == 'revisi')
                                                    <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                                @elseif ($kepemimpinan->status == 'disetujui')
                                                    <span class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                @elseif ($kepemimpinan->status == 'ditolak')
                                                    <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            {{-- sosial --}}
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <h4 class="col-12"><b>Sosialisasi, Kordinasi, Kerjasama Lintas Sektoral Dan Kelembagaan
                                        Negara</b></h4>
                            </div>
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Unit</th>
                                        <th class="text-center">Sub Kriteria</th>
                                        <th class="text-center">Level</th>
                                        <th class="text-center">Triwulan</th>
                                        <th class="text-center">Document</th>
                                        <th class="text-center">catatan</th>
                                        <th class="text-center">status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sosials as $sosial)
                                        <tr>
                                            <td></td>
                                            <td class="text-justify"><strong>{{ $sosial->no_kriteria }}</strong></td>
                                            <td class="text-justify"><strong>{{ $sosial->divisi }}</strong></td>
                                            <td class="text-justify"><strong>{{ $sosial->sub_kriteria }}</strong></td>
                                            <td class="text-center"><strong>{{ $sosial->level }}</strong></td>
                                            <td class="text-center"><strong>{{ $sosial->triwulan }}</strong></td>
                                            <td class="text-center">
                                                <a
                                                    href="/sosial/{{ $sosial->id }}"class="btn btn-icon rounded-circle btn-primary btn-sm"><span
                                                        data-feather="eye"></span></a>
                                            </td>

                                            <td class="text-justify"><strong>{{ $sosial->catatan }}</strong></td>
                                            <td class="text-center">
                                                @if ($sosial->status == 'diajukan')
                                                    <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                                @elseif ($sosial->status == 'tindaklanjut')
                                                    <span class="badge rounded-pill  badge-light-primary">Tindak
                                                        Lanjut</span>
                                                @elseif ($sosial->status == 'revisi')
                                                    <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                                @elseif ($sosial->status == 'disetujui')
                                                    <span class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                @elseif ($sosial->status == 'ditolak')
                                                    <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            {{-- pengamanan --}}
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <h4 class="col-12"><b>Audit dan Assessment Pengamanan</b></h4>
                            </div>
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Unit</th>
                                        <th class="text-center">Sub Kriteria</th>
                                        <th class="text-center">Level</th>
                                        <th class="text-center">Triwulan</th>
                                        <th class="text-center">Document</th>
                                        <th class="text-center">catatan</th>
                                        <th class="text-center">status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengamanans as $pengamanan)
                                        <tr>
                                            <td></td>
                                            <td class="text-justify"><strong>{{ $pengamanan->no_kriteria }}</strong></td>
                                            <td class="text-justify"><strong>{{ $pengamanan->divisi }}</strong></td>
                                            <td class="text-justify"><strong>{{ $pengamanan->sub_kriteria }}</strong></td>
                                            <td class="text-center"><strong>{{ $pengamanan->level }}</strong></td>
                                            <td class="text-center"><strong>{{ $pengamanan->triwulan }}</strong></td>
                                            <td class="text-center">
                                                <a
                                                    href="/pengamanan/{{ $pengamanan->id }}"class="btn btn-icon rounded-circle btn-primary btn-sm"><span
                                                        data-feather="eye"></span></a>
                                            </td>

                                            <td class="text-justify"><strong>{{ $pengamanan->catatan }}</strong></td>
                                            <td class="text-center">
                                                @if ($pengamanan->status == 'diajukan')
                                                    <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                                @elseif ($pengamanan->status == 'tindaklanjut')
                                                    <span class="badge rounded-pill  badge-light-primary">Tindak
                                                        Lanjut</span>
                                                @elseif ($pengamanan->status == 'revisi')
                                                    <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                                @elseif ($pengamanan->status == 'disetujui')
                                                    <span class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                @elseif ($pengamanan->status == 'ditolak')
                                                    <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            {{-- kerawanan --}}
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <h4 class="col-12"><b>Identifikasi Tingkat Kerawanan Keamanan</b></h4>
                            </div>
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Unit</th>
                                        <th class="text-center">Sub Kriteria</th>
                                        <th class="text-center">Level</th>
                                        <th class="text-center">Triwulan</th>
                                        <th class="text-center">Document</th>
                                        <th class="text-center">catatan</th>
                                        <th class="text-center">status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kerawanans as $kerawanan)
                                        <tr>
                                            <td></td>
                                            <td class="text-justify"><strong>{{ $kerawanan->no_kriteria }}</strong></td>
                                            <td class="text-justify"><strong>{{ $kerawanan->divisi }}</strong></td>
                                            <td class="text-justify"><strong>{{ $kerawanan->sub_kriteria }}</strong></td>
                                            <td class="text-center"><strong>{{ $kerawanan->level }}</strong></td>
                                            <td class="text-center"><strong>{{ $kerawanan->triwulan }}</strong></td>
                                            <td class="text-center">
                                                <a
                                                    href="/kerawanan/{{ $kerawanan->id }}"class="btn btn-icon rounded-circle btn-primary btn-sm"><span
                                                        data-feather="eye"></span></a>
                                            </td>

                                            <td class="text-justify"><strong>{{ $kerawanan->catatan }}</strong></td>
                                            <td class="text-center">
                                                @if ($kerawanan->status == 'diajukan')
                                                    <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                                @elseif ($kerawanan->status == 'tindaklanjut')
                                                    <span class="badge rounded-pill  badge-light-primary">Tindak
                                                        Lanjut</span>
                                                @elseif ($kerawanan->status == 'revisi')
                                                    <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                                @elseif ($kerawanan->status == 'disetujui')
                                                    <span class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                @elseif ($kerawanan->status == 'ditolak')
                                                    <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            {{-- pelatihan --}}
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <h4 class="col-12"><b>Kompetensi Dan Pelatihan</b></h4>
                            </div>
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-justify">No</th>
                                        <th class="text-justify">Unit</th>
                                        <th class="text-justify">Sub Kriteria</th>
                                        <th class="text-center">Level</th>
                                        <th class="text-center">Triwulan</th>
                                        <th class="text-center">Document</th>
                                        <th class="text-justify">catatan</th>
                                        <th class="text-center">status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelatihans as $pelatihan)
                                        <tr>
                                            <td></td>
                                            <td class="text-justify"><strong>{{ $pelatihan->no_kriteria }}</strong></td>
                                            <td class="text-justify"><strong>{{ $pelatihan->divisi }}</strong></td>
                                            <td class="text-justify"><strong>{{ $pelatihan->sub_kriteria }}</strong></td>
                                            <td class="text-center"><strong>{{ $pelatihan->level }}</strong></td>
                                            <td class="text-center"><strong>{{ $pelatihan->triwulan }}</strong></td>
                                            <td class="text-center">
                                                <a
                                                    href="/pelatihan/{{ $pelatihan->id }}"class="btn btn-icon rounded-circle btn-primary btn-sm"><span
                                                        data-feather="eye"></span></a>
                                            </td>

                                            <td class="text-justify"><strong>{{ $pelatihan->catatan }}</strong></td>
                                            <td class="text-center">
                                                @if ($pelatihan->status == 'diajukan')
                                                    <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                                @elseif ($pelatihan->status == 'tindaklanjut')
                                                    <span class="badge rounded-pill  badge-light-primary">Tindak
                                                        Lanjut</span>
                                                @elseif ($pelatihan->status == 'revisi')
                                                    <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                                @elseif ($pelatihan->status == 'disetujui')
                                                    <span class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                @elseif ($pelatihan->status == 'ditolak')
                                                    <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            {{-- lapor --}}
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <h4 class="col-12"><b>Pelaporan</b></h4>
                            </div>
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-justify">No</th>
                                        <th class="text-justify">Unit</th>
                                        <th class="text-justify">Sub Kriteria</th>
                                        <th class="text-justify">Level</th>
                                        <th class="text-justify">Triwulan</th>
                                        <th class="text-center">Document</th>
                                        <th class="text-justify">catatan</th>
                                        <th class="text-justify">status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lapors as $lapor)
                                        <tr>
                                            <td></td>
                                            <td class="text-justify"><strong>{{ $lapor->no_kriteria }}</strong></td>
                                            <td class="text-justify"><strong>{{ $lapor->divisi }}</strong></td>
                                            <td class="text-justify"><strong>{{ $lapor->sub_kriteria }}</strong></td>
                                            <td class="text-center"><strong>{{ $lapor->level }}</strong></td>
                                            <td class="text-center"><strong>{{ $lapor->triwulan }}</strong></td>
                                            <td class="text-center">
                                                <a
                                                    href="/lapor/{{ $lapor->id }}"class="btn btn-icon rounded-circle btn-primary btn-sm"><span
                                                        data-feather="eye"></span></a>
                                            </td>

                                            <td class="text-justify"><strong>{{ $lapor->catatan }}</strong></td>
                                            <td class="text-center">
                                                @if ($lapor->status == 'diajukan')
                                                    <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                                @elseif ($lapor->status == 'tindaklanjut')
                                                    <span class="badge rounded-pill  badge-light-primary">Tindak
                                                        Lanjut</span>
                                                @elseif ($lapor->status == 'revisi')
                                                    <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                                @elseif ($lapor->status == 'disetujui')
                                                    <span class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                @elseif ($lapor->status == 'ditolak')
                                                    <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col text-end">
                        <a href="/rekapjakartatw2" class="btn btn-primary btn-md " target="blank">Generated Level</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
@endsection
