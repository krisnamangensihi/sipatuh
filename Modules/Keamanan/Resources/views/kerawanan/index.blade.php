@extends('keamanan::layouts.tabel')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                 <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>No</th>
                                            <th>sub Kriteria</th>
                                            <th>Level</th>
                                            <th>Document</th>
                                            <th>catatan</th>
                                            <th>status</th>
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $kerawanans as $kerawanan )
                                            
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $kerawanan->no_kriteria }}</td>
                                            <td class="text-center">{{ $kerawanan->sub_kriteria }}</td>
                                            <td>{{ $kerawanan->level }}</td>
                                            <td> 
                                                 <a href="/Keamanan/kerawanantabel/{{ $kerawanan->id }}"class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="eye"></span></a>
                                        </td>
                                        
                                        <td>{{ $kerawanan->catatan }}</td>
                                        <td>
                                                @if ($kerawanan->status=="diajukan")
                                                <span class="badge rounded-pill  badge-light-info">diajukan</span>
                                                @elseif ($kerawanan->status=="ditinjau")
                                                <span class="badge rounded-pill  badge-light-primary">ditinjau</span>
                                                @elseif ($kerawanan->status=="revisi")
                                                <span class="badge rounded-pill  badge-light-warning">revisi</span>
                                                @elseif ($kerawanan->status=="disetujui")
                                                <span class="badge rounded-pill  badge-light-success">disetujui</span>
                                                @elseif ($kerawanan->status=="ditolak")
                                                <span class="badge rounded-pill  badge-light-danger">ditolak</span>
                                                @endif
                                            </td>
                                            {{-- <td>
                                                 <form action="/K3/rkap/{{ $pengajuan->id }}" method="POST">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-gradient-danger btn-sm">Hapus</button>
                                                                    </form>
                                                                    <form action="/K3/rkap/{{ $pengajuan->id }}/edit" method="POST">
                                                                        @method('get')
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-gradient-primary btn-sm">edit</button>
                                                                    </form>
                                                                    
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              
                </section>
            </div>
        </div>
    </div>
     
@endsection