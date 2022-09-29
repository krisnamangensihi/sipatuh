@extends('layouts.admin')
@section('tittle')
    Admin Lingkungan
@endsection
@section('content')
    <!-- BEGIN: Content-->
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
                                    <li class="breadcrumb-item active">UPDL PADANG
                                    </li>
                                    <li class="breadcrumb-item active">DokLing dan IL
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
                                        <th class="text-center">Nomor Surat</th>
                                        <th class="text-center">Perihal</th>
                                        <th class="text-center">Triwulan</th>
                                        {{-- <th class="text-center">Tanggal Dibuat</th> --}}
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Catatan</th>
                                        <th class="text-center">Berkas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($p1bs as $p1b)
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $p1b->nomer_surat }}</td>
                                            <td class="text-center">{{ $p1b->perihal }}</td>
                                            {{-- <td class="text-center">{{ $p1b->divisi }}</td> --}}
                                            <td class="text-center">{{ $p1b->wulan }}</td>
                                            {{-- <td class="text-center">{{ $p1b->tanggal_dibuat }}</td> --}}
                                            <td class="text-center">
                                                @if ($p1b->status == 'diajukan')
                                                    <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                                @elseif ($p1b->status == 'disetujui')
                                                    <span class="badge rounded-pill  badge-light-success">Diterima</span>
                                                @elseif ($p1b->status == 'direvisi')
                                                    <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                                @elseif ($p1b->status == 'ditindak')
                                                    <span class="badge rounded-pill  badge-light-primary">Tindak
                                                        Lanjut</span>
                                                @elseif ($p1b->status == 'ditolak')
                                                    <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $p1b->catatan }}</td>
                                            <td class="text-center">
                                                <a href="/padang1b/{{ $p1b->id }}"
                                                    class="btn btn-icon btn-success"><span data-feather="eye"></span></a>
                                                {{-- <a href="/Lingkungan/p1b/{{ $p1b->id }}/edit"
                                                    class="btn btn-icon btn-warning"><span data-feather="edit"></span></a>

                                                <form action="/Lingkungan/p1b/{{ $p1b->id }}" method="post"
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

        </div>
    </div>
    <!-- END: Content-->
@endsection
