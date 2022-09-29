@extends('lingkungan::layouts.datalingkungan')
@section('tittle')
    Rekap Data
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
                <h2 class="content-header-title float-start mb-0">Dokumen Lingkungan</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                  </ol>
                </div>
              </div>
            </div>
          </div>
    </div>

<!-- Basic table -->
    {{-- <section id="basic-datatable">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <table class="datatables-basic table">
            <thead>
                <tr>
                <th></th>
                <th class="text-center">no</th>
                <th class="text-center">Jenis Berkas</th>
                <th class="text-center">Jenis Dokumen</th>
                <th class="text-center">Divisi</th>
                <th class="text-center">Triwulan</th>
                <th class="text-center">Bulan</th>
                <th class="text-center">Tanggal Dibuat</th>
                <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($point1s as $point1)
                <tr>
                <td></td>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $point1->jenis }}</td>
                <td class="text-center">{{ $point1->dok }}</td>
                <td class="text-center">{{ $point1->divisi }}</td>
                <td class="text-center">{{ $point1->wulan }}</td>
                <td class="text-center">{{ $point1->bulan }}</td>
                <td class="text-center">{{ $point1->tanggal_dibuat }}</td>
                <td class="text-center">
                    <a href="/Lingkungan/point1a/{{ $point1->id }}" class="btn btn-icon btn-success"><span data-feather="eye"></span></a>
                    <a href="#"  class="btn btn-icon btn-warning" ><span data-feather="edit"></span></a>

                    <form action="/Lingkungan/point1a/{{ $point1->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-icon btn-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                            <span data-feather="trash-2">
                            </span>
                        </button>
                    </form>
                </td>
                </tr>
                @endforeach

            </tbody>
            </table>
        </div>
        </div>
    </div>
    </section> --}}
<!--/ Basic table -->

{{-- <!-- Basic table 2 -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <table class="datatables-basic table">
            <thead>
                <tr>
                <th></th>
                <th class="text-center">no</th>
                <th class="text-center">Jenis Berkas</th>
                <th class="text-center">Nomer Surat</th>
                <th class="text-center">Perihal</th>
                <th class="text-center">Divisi</th>
                <th class="text-center">Triwulan</th>
                <th class="text-center">Bulan</th>
                <th class="text-center">Tanggal Dibuat</th>
                <th class="text-center" colspan="3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($point2s as $point2)
                <tr>
                <td></td>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $point2->jenis }}</td>
                <td class="text-center">{{ $point2->nomer_surat }}</td>
                <td class="text-center">{{ $point2->perihal }}</td>
                <td class="text-center">{{ $point2->divisi }}</td>
                <td class="text-center">{{ $point2->wulan }}</td>
                <td class="text-center">{{ $point2->bulan }}</td>
                <td class="text-center">{{ $point2->tanggal_dibuat }}</td>
                <td class="text-center">
                    <a href="/Lingkungan/point2a/{{ $point2->id }}" class="btn btn-icon btn-success"><span data-feather="eye"></span></a>

                    <form action="/Lingkungan/point2a/{{ $point2->id }}/edit" method="POST" class="d-inline">
                        @method('get')
                        @csrf
                        <button class="btn btn-icon btn-warning" onclick="('Apakah anda yakin ingin mengubah data?')">
                            <span data-feather="edit"></span>
                        </button>
                    </form>

                    <form action="/Lingkungan/point2a/{{ $point2->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-icon btn-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                            <span data-feather="trash-2">
                            </span>
                        </button>
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
<!--/ Basic table 2 --> --}}

{{-- <!-- Basic table 3 -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <table class="datatables-basic table">
            <thead>
                <tr>
                <th></th>
                <th class="text-center">no</th>
                <th class="text-center">Jenis Berkas</th>
                <th class="text-center">Nomer Surat</th>
                <th class="text-center">Perihal</th>
                <th class="text-center">Divisi</th>
                <th class="text-center">Triwulan</th>
                <th class="text-center">Bulan</th>
                <th class="text-center">Tanggal Dibuat</th>
                <th class="text-center"colspan="3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($point3s as $point3)
                <tr>
                <td></td>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $point3->jenis }}</td>
                <td class="text-center">{{ $point3->nomer_surat }}</td>
                <td class="text-center">{{ $point3->perihal }}</td>
                <td class="text-center">{{ $point3->divisi }}</td>
                <td class="text-center">{{ $point2->wulan }}</td>
                <td class="text-center">{{ $point2->bulan }}</td>
                <td class="text-center">{{ $point3->tanggal_dibuat }}</td>
                <td class="text-center">
                    <a href="/Lingkungan/point3a/{{ $point3->id }}" class="btn btn-icon btn-success"><span data-feather="eye"></span></a>

                    <form action="#" method="POST" class="d-inline">
                        @method('get')
                        @csrf
                        <button class="btn btn-icon btn-warning" onclick="('Apakah anda yakin ingin mengubah data?')">
                            <span data-feather="edit"></span>
                        </button>
                    </form>

                    <form action="/Lingkungan/point3a/{{ $point3->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-icon btn-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                            <span data-feather="trash-2">
                            </span>
                        </button>
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
<!--/ Basic table 3 --> --}}

        </div>
      </div>
    <!-- END: Content-->

@endsection
