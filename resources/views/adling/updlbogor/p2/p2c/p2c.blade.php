@extends('layouts.admin')
@section('tittle')
    Lingkungan
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
                            <h2 class="content-header-title float-start mb-0">PPLH</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">UPDL BOGOR
                                    </li>
                                    <li class="breadcrumb-item active">Pemanfaatan Air
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
                    </div> --}}
            </div>
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
                                    <th class="text-center">Nomer Surat</th>
                                    <th class="text-center">Perihal</th>
                                    <th class="text-center">Triwulan</th>
                                    <th class="text-center">Tanggal Dibuat</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Catatan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($p2cs as $p2c)
                                    <tr>
                                        <td></td>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $p2c->nomer_surat }}</td>
                                        <td class="text-center">{{ $p2c->perihal }}</td>
                                        <td class="text-center">{{ $p2c->wulan }}</td>
                                        {{-- <td class="text-center">{{ $p2c->bulan }}</td> --}}
                                        <td class="text-center">{{ $p2c->tanggal_dibuat }}</td>
                                        <td class="text-center">
                                            @if ($p2c->status == 'diajukan')
                                                <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                            @elseif ($p2c->status == 'disetujui')
                                                <span class="badge rounded-pill  badge-light-success">Disetujui</span>
                                            @elseif ($p2c->status == 'ditolak')
                                                <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                            @elseif ($p2c->status == 'direvisi')
                                                <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                            @elseif ($p2c->status == 'ditindak')
                                                <span class="badge rounded-pill  badge-light-primary">Tindak
                                                    Lanjut</span>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $p2c->catatan }}</td>
                                        <td class="text-center">
                                            <a href="/bogor2c/{{ $p2c->id }}" class="btn btn-icon btn-success"><span
                                                    data-feather="eye"></span></a>
                                            {{-- <a href="/Lingkungan/p2c/{{ $p2c->id }}/edit"
                                                    class="btn btn-icon btn-warning" style="margin: 3%"><span
                                                        data-feather="edit"></span></a>

                                                <form action="/Lingkungan/p2c/{{ $p2c->id }}" method="post"
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
