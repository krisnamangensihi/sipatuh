@extends('layouts.admin')
@section('tittle')
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
                            <h2 class="content-header-title float-start mb-0">Form Edit </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Edit
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
                                    <h4 class="card-title">Form Edit</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/admin1a/{{ $p1a->id }}"
                                        class="form form-vertical" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label>Unggah Berkas</label>
                                                <input class="form-control" name="dokumen" type="file" id="berkas"
                                                    required>
                                                    <input type="hidden" value="{{ Auth::user()->name }}" name="name">
                                                    <input type="hidden" value="{{ Auth::user()->unit }}" name="nip">
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <div class="card-body ">
                                                <button type="hidden" value="tw1" name="verifikasi" class="btn btn-primary" id="type-update"
                                                    onclick="return confirm('Apakah anda yakin ingin mengedit data?')">Simpan</button>
                                                <button type="reset"
                                                    class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Basic File Browser start -->

                </section>
                <!-- Basic File Browser end -->
            @endsection
