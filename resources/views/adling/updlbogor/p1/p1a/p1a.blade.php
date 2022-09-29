@extends('layouts.admin')
@section('tittle')
    Admin Lingkungan
@endsection
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">DokLing dan IL</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">UPDL BOGOR
                                    </li>
                                    <li class="breadcrumb-item active">Inventarisasi Dokling dan IL
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addNewAddressModal">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div> --}}

            </div>
            <div class="content-body">


            </div>

            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Jenis Dokumen</th>
                                        <th class="text-center">Triwulan</th>
                                        <th class="text-center">Tanggal Dibuat</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Catatan</th>
                                        <th class="text-center">Berkas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($p1as as $p1a)
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $p1a->jenis }}</td>
                                            {{-- <td class="text-center">{{ $p1a->divisi }}</td> --}}
                                            <td class="text-center">{{ $p1a->wulan }}</td>
                                            <td class="text-center">{{ $p1a->tanggal_dibuat }}</td>
                                            <td class="text-center">
                                                @if ($p1a->status == 'diajukan')
                                                    <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                                @elseif ($p1a->status == 'disetujui')
                                                    <span class="badge rounded-pill  badge-light-success">Diterima</span>
                                                @elseif ($p1a->status == 'direvisi')
                                                    <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                                @elseif ($p1a->status == 'ditindak')
                                                    <span class="badge rounded-pill  badge-light-primary">Tindak
                                                        Lanjut</span>
                                                @elseif ($p1a->status == 'ditolak')
                                                    <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $p1a->catatan }}</td>
                                            <td class="text-center">
                                                <a href="/admin1a/{{ $p1a->id }}"
                                                    class="btn btn-icon btn-success"><span data-feather="eye"></span></a>

                                                {{-- <a href="/ttebogor1a" class="btn btn-icon btn-warning" target="blank"><span
                                                        data-feather="edit"></span></a> --}}

                                                {{-- <form action="/Lingkungan/p1a/{{ $p1a->id }}" method="post"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-icon btn-danger border-0"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                                                        <span data-feather="trash-2">
                                                        </span>
                                                    </button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Basic table -->

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false" target="blank">
                    Tanda Terima
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/ttebogor1a1" target="auto-blank">TW I</a></li>
                    <li><a class="dropdown-item" href="/ttebogor1a2" target="auto-blank">TW II</a></li>
                    <li><a class="dropdown-item" href="/ttebogor1a3" target="auto-blank">TW III</a></li>
                    <li><a class="dropdown-item" href="/ttebogor1a4" target="auto-blank">TW IV</a></li>
                </ul>
            </div>

            {{-- <a href="/ttebogor1a" class="btn btn-primary btn-md" target="blank">Cetak Tanda Terima</a> --}}

        </div>
    </div>
@endsection
