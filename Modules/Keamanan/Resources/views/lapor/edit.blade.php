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
                                    <h4 class="card-title">Form Pengajuan Biasa</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/Keamanan/datakeamanan/{{ $lapor->id }}"
                                        class="form form-vertical">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 ">


                                                <div class="mb-2">
                                                    <label class="form-label" for="no_kriteria">No Kriteria</label>
                                                    <select class="form-select" id="no_kriteria" name="no_kriteria" required
                                                        autofocus value="{{ old('no_kriteria', $lapor->no_kriteria) }}">
                                                        <option>{{ old('no_kriteria', $lapor->kriteria) }}</option>
                                                        <option value="6.1"
                                                            @if ($lapor->no_kriteria == '6.1') selected @endif>6.1</option>
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">Pilih Kriteria!
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="sub_kriteria">sub kriteria</label>
                                                    <select class="form-select" id="sub_kriteria" name="sub_kriteria"
                                                        required autofocus
                                                        value="{{ old('sub_kriteria', $lapor->sub_kriteria) }}"
                                                        placeholder="Keterangan">
                                                        <option value="">
                                                            {{ old('sub_kriteria', $lapor->sub_kriteria) }}</option>
                                                        <option
                                                            value="Pelaksanaan Pelaporan Keamanan Unit Induk dan seluruh Unit Pelaksana serta Pelaporan Keamanan ke Divisi K3L"
                                                            @if ($lapor->kriteria ==
                                                                'Pelaksanaan Pelaporan Keamanan Unit Induk dan seluruh Unit Pelaksana serta Pelaporan Keamanan ke Divisi K3L') selected @endif>Melakukan
                                                            Tindakan Pencegahan Preemtif, Preventif dan Represif Pengamanan
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">Pilih Keterangan!
                                                    </div>
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="level">Level</label>
                                                    <select class="form-select" id="level" name="level" required
                                                        autofocus value="{{ old('keterangan', $lapor->level) }}">
                                                        <option>{{ old('keterangan', $lapor->level) }}</option>
                                                        <option value=" 1"> 1</option>
                                                        <option value=" 2"> 2</option>
                                                        <option value=" 3"> 3</option>
                                                        <option value=" 4"> 4</option>
                                                        <option value=" 5"> 5</option>
                                                    </select>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="status">Status</label>
                                                    <select class="form-select" id="status" name="status" required
                                                        autofocus value="{{ old('status', $lapor->status) }}">
                                                        <option>{{ old('status', $lapor->status) }} </option>
                                                        <option value="tindaklanjut">Tindak Lanjut</option>
                                                    </select>
                                                </div>
                                                <section id="form-control-repeater">
                                                    <div class="invoice-repeater">
                                                        <div data-repeater-list="lapordoc">
                                                            <div data-repeater-item>
                                                                <div class="row d-flex align-items-end">
                                                                    <div class="col-xl-4 col-md-6 col-12">
                                                                        <div class="mb-1">
                                                                            <label>Unggah Berkas</label>
                                                                            <input class="form-control" name="document"
                                                                                type="file" id="document" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 col-12">
                                                                        <div class="mb-1">
                                                                            <label for="keterangan"
                                                                                class="form-label">Keterangan</label>
                                                                            <input class="form-control" name="keterangan"
                                                                                type="text" id="keterangan">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="col-12 offset-sm-5">
                                                    <div class="card-body ">
                                                        <button class="btn btn-success" id="type-update"
                                                            onclick="return confirm('Apakah anda yakin ingin mengedit data?')">Simpan</button>
                                                        <button type="reset" class="btn btn-secondary">Reset</button>
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
