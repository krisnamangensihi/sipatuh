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
                            <h2 class="content-header-title float-start mb-0">PLH</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">UPDL TUNTUNGAN
                                    </li>
                                    <li class="breadcrumb-item active">Surat Penyampaian Dokumen dan atau Tanda Terima
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
                                        <th class="text-center">Nomor Surat</th>
                                        <th class="text-center">Perihal</th>
                                        <th class="text-center">Triwulan</th>
                                        {{-- <th class="text-center">Lampiran</th> --}}
                                        {{-- <th class="text-center">Bukti</th> --}}
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Catatan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($p7as as $p7a)
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $p7a->nomer_surat }}</td>
                                            <td class="text-center">{{ $p7a->perihal }}</td>
                                            <td class="text-center">{{ $p7a->wulan }}</td>
                                            {{-- <td class="text-center">
                                                <a href="{{ asset('storage/' . $p7a->berkas) }}" target="blank"
                                                    class="btn btn-icon btn-success"><span data-feather="eye"></span></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ asset('storage/' . $p7a->foto) }}" target="blank"
                                                    class="btn btn-icon btn-success"><span data-feather="eye"></span></a>
                                            </td> --}}
                                            {{-- <td class="text-center">{{ $p7a->bulan }}</td> --}}
                                            {{-- <td class="text-center">{{ $p7a->tanggal_dibuat }}</td> --}}
                                            <td class="text-center">
                                                @if ($p7a->status == 'diajukan')
                                                    <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                                @elseif ($p7a->status == 'disetujui')
                                                    <span class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                @elseif ($p7a->status == 'direvisi')
                                                    <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                                @elseif ($p7a->status == 'ditindak')
                                                    <span class="badge rounded-pill  badge-light-primary">Tindak Lanjut</span>
                                                @elseif ($p7a->status == 'ditolak')
                                                    <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $p7a->catatan }}</td>
                                            <td class="text-center">
                                                <a href="/tun7a/{{ $p7a->id }}"
                                                    class="btn btn-icon btn-success"><span data-feather="eye"></span></a>
                                                {{-- <a href="/Lingkungan/p7a/{{ $p7a->id }}/edit"
                                                    class="btn btn-icon btn-warning" ><span
                                                        data-feather="edit"></span></a>

                                                <form action="/Lingkungan/p7a/{{ $p7a->id }}" method="post"
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
@endsection
