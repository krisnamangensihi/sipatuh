@extends('keamanan::layouts.form')
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
                                    <h4 class="card-title">Kepemimpinan dan Komitmen Manajemen</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/Keamanan/datakeamanan/{{ $manager->id }}" class="form form-vertical">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 ">
                                            
                                        <div class="row">
                                            <div class="mb-1 col-md-12">
                                            <label class="form-label" for="temuan">Temuan</label>
                                            <input type="number" id="temuan" name="temuan" required autofocus value="{{ old('temuan',$manager->temuan) }}" placeholder="Keterangan"/>
                                            </div>
                                        </div>
                                                     
                                                
                                        <div class="col-12 offset-sm-5">
                                            <div class="card-body ">
                                                <button class="btn btn-primary" id="type-update"
                                                        onclick="return confirm('Apakah anda yakin ingin mengedit data?')">Simpan</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
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