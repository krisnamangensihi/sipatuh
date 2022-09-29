@extends('keamanan::layouts.tabel')
@section('content')
    {{-- leadership --}}
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0"><b>Maturity Level Keamanan</b></h2>
                            <div class="breadcrumb-wrapper">
                                {{-- <div class="dropdown">
                                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            data-feather="grid"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="/cetakbogor"
                                            target="blank"><i class="me-1" data-feather="check-square"></i><span
                                                class="align-middle">Cetak Pdf</span></a>
                                        <a class="dropdown-item" href="/Keamanan/mangensihi" target="blank"><i
                                                class="me-1"data-feather="check-square"></i><span
                                                class="align-middle">Generated
                                                Level</span></a>
                                        {{-- <a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a>
                                <a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a> --}}
                                {{-- </div> --}}
                                {{-- <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="{{ route('cetakpdfbogor') }}"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Cetak Pdf</span></a></div> --}}
                                {{-- <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Rekap data</span></a></div> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- kepemimpinan --}}
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
                                            <th class="text-center">sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Triwulan</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">catatan</th>
                                            <th class="text-center">status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kepemimpinans as $kepemimpinan)
                                            <tr>
                                                <td></td>
                                                <td class="text-center"><strong>{{ $kepemimpinan->no_kriteria }}</strong>
                                                </td>
                                                <td class="text-justify"><strong>{{ $kepemimpinan->sub_kriteria }}</strong>
                                                </td>
                                                <td class="text-center"><strong>{{ $kepemimpinan->level }}</strong></td>
                                                <td class="text-center"><strong>{{ $kepemimpinan->triwulan }}</strong></td>
                                                <td class="text-center">
                                                    <a
                                                        href="/Keamanan/datakeamanan/{{ $kepemimpinan->id }}"class="btn btn-icon rounded-circle btn-outline-success btn-sm"><span
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
                                                        <span
                                                            class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                    @elseif ($kepemimpinan->status == 'ditolak')
                                                        <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                    @endif
                                                </td>
                                                <td>

                                                    <form action="/Keamanan/datakeamanan/{{ $kepemimpinan->id }}"
                                                        method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0" id="type-hapus"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span
                                                                data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}

                                                    </form>
                                                    <form action="/Keamanan/datakeamanan/{{ $kepemimpinan->id }}/edit"
                                                        method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf

                                                        <button class="badge bg-warning border-0"
                                                            onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span
                                                                data-feather="edit"></span></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- ahkir kepemimpinan --}}
                {{-- Sosial --}}
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
                                            <th class="text-center">sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Triwulan</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">catatan</th>
                                            <th class="text-center">status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sosials as $sosial)
                                            <tr>
                                                <td></td>
                                                <td class="text-center"><strong>{{ $sosial->no_kriteria }}</strong> </td>
                                                <td class="text-justify"><strong>{{ $sosial->sub_kriteria }}</strong></td>
                                                <td class="text-center"><strong>{{ $sosial->level }}</strong></td>
                                                <td class="text-center"><strong>{{ $sosial->triwulan }}</strong></td>
                                                <td class="text-center">
                                                    <a
                                                        href="/Keamanan/sosial/{{ $sosial->id }}"class="btn btn-icon rounded-circle btn-outline-success btn-sm"><span
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
                                                        <span
                                                            class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                    @elseif ($sosial->status == 'ditolak')
                                                        <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                    @endif
                                                </td>
                                                <td>

                                                    <form action="/Keamanan/sosial/{{ $sosial->id }}" method="POST"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0" id="type-hapus"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span
                                                                data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="/Keamanan/sosial/{{ $sosial->id }}/edit" method="POST"
                                                        class="d-inline">
                                                        @method('get')
                                                        @csrf

                                                        <button class="badge bg-warning border-0"
                                                            onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span
                                                                data-feather="edit"></span></button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- ahkir sosial --}}
                {{-- pengamanan --}}
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body border-bottom">
                                    <h4 class="col-12"><strong>Audit dan Assessment Pengamanan</strong></h4>
                                </div>
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Triwulan</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">Catatan</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengamanans as $pengamanan)
                                            <tr>
                                                <td></td>
                                                <td class="text-justify"><strong>{{ $pengamanan->no_kriteria }}</strong>
                                                </td>
                                                <td class="text-justify"><strong>{{ $pengamanan->sub_kriteria }}</strong>
                                                </td>
                                                <td class="text-center"><strong>{{ $pengamanan->level }}</strong></td>
                                                <td class="text-center"><strong>{{ $pengamanan->triwulan }}</strong></td>
                                                <td class="text-center">
                                                    <a
                                                        href="/Keamanan/pengamanan/{{ $pengamanan->id }}"class="btn btn-icon rounded-circle btn-outline-success btn-sm"><span
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
                                                        <span
                                                            class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                    @elseif ($pengamanan->status == 'ditolak')
                                                        <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                    @endif
                                                </td>
                                                <td>

                                                    <form action="/Keamanan/pengamanan/{{ $pengamanan->id }}"
                                                        method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0" id="type-hapus"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span
                                                                data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="/Keamanan/pengamanan/{{ $pengamanan->id }}/edit"
                                                        method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf

                                                        <button class="badge bg-warning border-0"
                                                            onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span
                                                                data-feather="edit"></span></button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- ahkir pengamanan --}}
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
                                            <th class="text-center">Sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Triwulan</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">Catatan</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kerawanans as $kerawanan)
                                            <tr>
                                                <td></td>
                                                <td class="text-justify"><strong>{{ $kerawanan->no_kriteria }}</strong>
                                                </td>
                                                <td class="text-justify"><strong>{{ $kerawanan->sub_kriteria }}</strong>
                                                </td>
                                                <td class="text-center"><strong>{{ $kerawanan->level }}</strong></td>
                                                <td class="text-center"><strong>{{ $kerawanan->triwulan }}</strong></td>
                                                <td class="text-center">
                                                    <a
                                                        href="/Keamanan/kerawanan/{{ $kerawanan->id }}"class="btn btn-icon rounded-circle btn-outline-success btn-sm"><span
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
                                                        <span
                                                            class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                    @elseif ($kerawanan->status == 'ditolak')
                                                        <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                    @endif
                                                </td>
                                                <td>

                                                    <form action="/Keamanan/kerawanan/{{ $kerawanan->id }}"
                                                        method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0" id="type-hapus"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span
                                                                data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="/Keamanan/kerawanan/{{ $kerawanan->id }}/edit"
                                                        method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf

                                                        <button class="badge bg-warning border-0"
                                                            onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span
                                                                data-feather="edit"></span></button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- ahkir kerawanan --}}
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
                                            <th class="text-center">No</th>
                                            <th class="text-center">Sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Triwulan</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">Catatan</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pelatihans as $pelatihan)
                                            <tr>
                                                <td></td>
                                                <td class="text-justify"><strong>{{ $pelatihan->no_kriteria }}</strong>
                                                </td>
                                                <td class="text-justify"><strong>{{ $pelatihan->sub_kriteria }}</strong>
                                                </td>
                                                <td class="text-center"><strong>{{ $pelatihan->level }}</strong></td>
                                                <td class="text-center"><strong>{{ $pelatihan->triwulan }}</strong></td>
                                                <td class="text-center">
                                                    <a
                                                        href="/Keamanan/pelatihan/{{ $pelatihan->id }}"class="btn btn-icon rounded-circle btn-outline-success btn-sm"><span
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
                                                        <span
                                                            class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                    @elseif ($pelatihan->status == 'ditolak')
                                                        <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                    @endif
                                                </td>
                                                <td>

                                                    <form action="/Keamanan/pelatihan/{{ $pelatihan->id }}"
                                                        method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0" id="type-hapus"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span
                                                                data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="/Keamanan/pelatihan/{{ $pelatihan->id }}/edit"
                                                        method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf

                                                        <button class="badge bg-warning border-0"
                                                            onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span
                                                                data-feather="edit"></span></button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- ahkir pelatihan --}}
                {{-- inspeksi manager --}}
                {{-- <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                            <h4 class="col-12"> Inspeksi Manager </h4>
                        </div>
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="text-center">Tanggal Dibuat</th>
                                            <th class="text-center">Divisi</th>
                                            <th class="text-center">Temuan</th>
                                            <th class="text-center">Penanggung Jawab</th>
                                            <th class="text-center">Selesai Ditindaklanjuti</th>
                                            <th class="text-center">Catatan</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($managers as $manager)
                                       <tfoot>     
                                        <tr>
                                            <td class="text-justify">{{ $loop->iteration}}</td>
                                            <td class="text-justify">{{ $manager->tanggal_dibuat}}</td>
                                            <td class="text-justify">{{ $manager->divisi}}</td>
                                            <td class="text-justify">{{ $manager->temuan}}</td>
                                            <td class="text-justify">{{ $manager->penanggung_jawab}}</td>
                                            <td class="text-justify">{{ $manager->selesai}}</td>
                                            <td class="text-justify">{{ $manager->catatan }}</td>
                                            
                                            
                                            <td>
                                                @if ($manager->status == 'diajukan')
                                                <span class="badge rounded-pill  badge-light-info">diajukan</span>
                                                @elseif ($manager->status=="ditinjau")
                                                <span class="badge rounded-pill  badge-light-primary">ditinjau</span>
                                                @elseif ($manager->status=="revisi")
                                                <span class="badge rounded-pill  badge-light-warning">revisi</span>
                                                @elseif ($manager->status=="disetujui")
                                                <span class="badge rounded-pill  badge-light-success">disetujui</span>
                                                @elseif ($manager->status=="ditolak")
                                                <span class="badge rounded-pill  badge-light-danger">ditolak</span>
                                                @endif
                                            </td>
                                            <td> 
                                                 <a href="/Keamanan/manager/{{ $manager->id }}"class="btn btn-icon rounded-circle btn-primary btn-sm"><span data-feather="eye"></span></a>
                                            </td>
                                            <td>
                                                    <form action="/Keamanan/manager/{{ $manager->id }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0" id="type-hapus"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span data-feather="trash"></span></button>
                                                        <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a>
                                                    </form>
                                            </td>
                                        </tr>
                                        </tfoot>
                                        @endforeach
                                    </tbody>
                                </table>
                </section> -
                {{-- ahkir manager --}}
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
                                            <th class="text-center">No</th>
                                            <th class="text-center">Sub Kriteria</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Triwulan</th>
                                            <th class="text-center">Document</th>
                                            <th class="text-center">Catatan</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lapors as $lapor)
                                            <tr>
                                                <td></td>
                                                <td class="text-justify"><strong>{{ $lapor->no_kriteria }}</strong></td>
                                                <td class="text-justify"><strong>{{ $lapor->sub_kriteria }}</strong></td>
                                                <td class="text-center"><strong>{{ $lapor->level }}</strong></td>
                                                <td class="text-center"><strong>{{ $lapor->triwulan }}</strong></td>
                                                <td class="text-center">
                                                    <a
                                                        href="/Keamanan/lapor/{{ $lapor->id }}"class="btn btn-icon rounded-circle btn-outline-success btn-sm"><span
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
                                                        <span
                                                            class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                    @elseif ($lapor->status == 'ditolak')
                                                        <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                    @endif
                                                </td>
                                                <td>

                                                    <form action="/Keamanan/lapor/{{ $lapor->id }}" method="POST"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0" id="type-hapus"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span
                                                                data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                    <form action="/Keamanan/lapor/{{ $lapor->id }}/edit"
                                                        method="POST" class="d-inline">
                                                        @method('get')
                                                        @csrf

                                                        <button class="badge bg-warning border-0"
                                                            onclick="return confirm('Apakah anda yakin ingin mengedit data?')"><span
                                                                data-feather="edit"></span></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- ahkir lapor --}}
                <div class="container">
                    <div class="row">
                        <div class="col text-end">
                            <a href="/Keamanan/mangensihi" class="btn btn-success btn-md " target="blank">Generated
                                Level</a>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection
