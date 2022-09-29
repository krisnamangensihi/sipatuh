@extends('k3::layouts.form')
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
                            <h2 class="content-header-title float-start mb-0">Form Upload </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Form Upload </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row">
                        <div class="col-12 col-md-12 mt-2">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Pengajuan Biasa</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/K3/rkap/{{ $leadership->id }}" class="form form-vertical" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 ">


                                                <div class="mb-2">
                                                    <label class="form-label" for="no_kriteria">no Kriteria</label>
                                                    <select class="form-select" id="no_kriteria"
                                                        name="no_kriteria" required autofocus value="{{ old('no_kriteria',$leadership->no_kriteria) }}">
                                                        <option value="{{ old('no_kriteria',$leadership->no_kriteria) }}">{{ old('no_kriteria',$leadership->no_kriteria)}}</option>
                                                        <option value="1.1" >1.1</option>
                                                        <option value="1.2" >1.2</option>
                                                        <option value="1.3" >1.3</option>
                                                        
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">Pilih Kriteria!
                                                    </div>
                                                </div>

                                                {{-- <div class="mb-2">
                                                    <label class="form-label" for="keterangan">Keterangan</label>
                                                    <input type="text" id="keterangan" class="form-control"
                                                        name="keterangan" required autofocus value="{{ old('keterangan',$leadership->keterangan)}}" placeholder="Keterangan" />
                                                </div> --}}
                                                     <div class="mb-2">
                                                     <label class="form-label" for="sub_kriteria">Sub Kriteria</label>
                                                    <select class="form-select" id="sub_kriteria"
                                                        name="sub_kriteria"  required autofocus value="{{ old('sub_kriteria',$leadership->sub_kriteria)}}" placeholder="Keterangan">
                                                        <option value="{{ old('sub_kriteria',$leadership->sub_kriteria)}}">{{ old('sub_kriteria',$leadership->sub_kriteria)}}</option>
                                                       <option>silahkan isi sub kriteria</option>
                                                <option value="Menyusun RKAP Bidang K3">Menyusun RKAP Bidang K3</option>
                                                <option value="Menerapan Contractor Safety Management System (CSMS)">Menerapan Contractor Safety Management System (CSMS)</option>
                                                <option value="Membangun Sistem Manajemen K3 Terintegrasi">Membangun Sistem Manajemen K3 Terintegrasi</option>
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">Pilih Keterangan!
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="level">Level</label>
                                                    <select class="form-select" id="level" name="level" required autofocus value="{{ old('level',$leadership->level)}}">
                                                        <option>{{ old('level',$leadership->level)}}</option>
                                                        <option value="level 1" >level 1</option>
                                                        <option value="level 2" >level 2</option>
                                                        <option value="level 3" >level 3</option>
                                                        <option value="level 4" >level 4</option>
                                                        <option value="level 5" >level 5</option>
                                                    </select>
                                                </div>
                                                <div class="mb-2">
                                                                       <label class="form-label" for="status">Status</label>
                                                                       <select class="form-select" id="status" name="status" required autofocus value="{{ old('status',$leadership->status)}}">
                                                                         <option>{{ old('status',$leadership->status)}} </option>
                                                                       <option value="tindaklanjut">tindak lanjut </option>
                                                                         </select>
                                                                       </div>
                                                                       <table>
                                                                    <tbody>
                                                                       @foreach ($leadershipdocs as $leadershipdoc)
                                                                        <tr>
                                                                                   <br> 
                                                                                <td class="pe-1">{{ $leadershipdoc->keterangan }}</td>
                                                                                <td><span class="fw-bold">:
                                                                                <a href="{{ asset('storage/' . $leadershipdoc->document) }}" target="blank">document <i data-feather="file"></i> </a>
                                                                            </td>
                                                                            <td>
                                                                                <form action="/K3/rkap/{{ $leadershipdoc->id }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-primary border-0" id="type-hapus"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><span data-feather="trash"></span></button>
                                                        {{-- <a type="submit" class="btn btn-icon rounded-circle btn-outline-primary btn-sm"><span data-feather="trash"></span></a> --}}
                                                    </form>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                        <section id="form-control-repeater">
                                            <div class="row">
                                                <div class="invoice-repeater">
                                                    <div data-repeater-list="leadershipdoc">
                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">
                                                                <div class="col-xl-4 col-md-6 col-12">
                                                                    <div class="mb-1">
                                                                        <label>upload document</label>
                                                                        <input class="form-control" name="document" type="file" id="document" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-md-6 col-12">
                                                                    <div class="mb-1">
                                                                        <label for="keterangan" class="form-label">keterangan</label>
                                                                        <input class="form-control" name="keterangan" type="text"
                                                                            id="keterangan" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div>
                                                            <button class="btn btn-success" id="type-success"
                                                            onclick="return confirm('Apakah anda yakin dengan data anda?')">simpan & ajukan</button>
                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                    </section>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Basic File Browser start -->

                </section>
                <!-- Basic File Browser end -->
@endsection