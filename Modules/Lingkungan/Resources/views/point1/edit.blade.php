@extends('lingkungan::layouts.lihat')
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
                                    <form method="POST" action="/Lingkungan/point1a/{{ $point1->id }}"
                                        class="form form-vertical">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="mb-1">
                                                    <label class="form-label" for="jenis">Jenis Berkas</label>
                                                    <select class="form-select" id="jenis" name="jenis" required
                                                        autofocus value="{{ old('jenis', $point1->jenis) }}">
                                                        <option>{{ old('jenis', $point1->jenis) }}</option>
                                                        <option value="Inventarisasi DokLing & IL" @if($point1->jenis == "Inventarisasi Dokling & IL") selected @endif>Inventarisasi DokLing & IL</option>
                                                        <option value="DokLing & IL" @if($point1->jenis == "Dokling & IL") selected @endif>DokLing & IL</option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih Jenis</div>
                                                </div>

                                                <div class="col-12 col-md-12">
                                                    <label class="form-label" for="dok">Jenis Dokumen</label>
                                                    <select class="form-select" id="dok" name="dok">
                                                        <option value="">-Pilih-</option>
                                                        <option value="SA-Profile Perusahaan" @if($point1->dok == "SA-Profile Perusahaan") selected @endif>SA-Profile Perusahaan</option>
                                                        <option value="SA-Izin Lingkungan" @if($point1->dok == "SA-Izin Lingkungan") selected @endif>SA-Izin Lingkungan</option>
                                                    </select>
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="jenis">Jenis Berkas</label>
                                                    <select class="form-select" id="jenis" name="jenis" required
                                                        autofocus value="{{ old('jenis', $point1->jenis) }}">
                                                        <option>{{ old('jenis', $point1->jenis) }}</option>
                                                        <option value="Inventarisasi DokLing & IL">Inventarisasi DokLing & IL</option>
                                                        <option value="DokLing & IL">DokLing & IL</option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih Jenis</div>
                                                </div>

                                                {{-- <div class="mb-1">
                                                    <label class="form-label" for="perihal">Perihal</label>
                                                    <input type="text" id="perihal" name="perihal" required autofocus
                                                        value="{{ old('perihal', $point1->perihal) }}" class="form-control"
                                                        placeholder="Perihal" aria-label="Perihal"
                                                        aria-describedby="perihal" required />
                                                </div> --}}

                                                <div class="mb-1">
                                                    <label class="form-label" for="wulan">Triwulan</label>
                                                    <select class="form-select" id="wulan" name="wulan" required
                                                        autofocus value="{{ old('wulan', $point1->wulan) }}">
                                                        <option>{{ old('wulan', $point1->wulan) }}</option>
                                                        <option value="TW I"
                                                            @if ($point1->wulan == 'TW I') selected @endif>TW I</option>
                                                        <option value="TW II"
                                                            @if ($point1->wulan == 'TW II') selected @endif>TW II</option>
                                                        <option value="TW III"
                                                            @if ($point1->wulan == 'TW III') selected @endif>TW III
                                                        </option>
                                                        <option value="TW IV"
                                                            @if ($point1->wulan == 'TW IV') selected @endif>TW IV</option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih</div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="bulan">Bulan</label>
                                                    <select class="form-select" id="bulan" name="bulan"
                                                        required autofocus value="{{ old('bulan', $point1->bulan) }}"">
                                                        <option value="">-Pilih-</option>
                                                        <option value="Januari" @if ($point1->bulan == 'Januari') selected @endif>Januari</option>
                                                        <option value="Februari" @if ($point1->bulan == 'Februari') selected @endif>Februari</option>
                                                        <option value="Maret" @if ($point1->bulan == 'Maret') selected @endif>Maret</option>
                                                        <option value="April" @if ($point1->bulan == 'April') selected @endif>April</option>
                                                        <option value="Mei" @if ($point1->bulan == 'Mei') selected @endif>Mei</option>
                                                        <option value="Juni" @if ($point1->bulan == 'Juni') selected @endif>Juni</option>
                                                        <option value="Juli" @if ($point1->bulan == 'Juli') selected @endif>Juli</option>
                                                        <option value="Agustus" @if ($point1->bulan == 'Agustus') selected @endif>Agustus</option>
                                                        <option value="September" @if ($point1->bulan == 'September') selected @endif>September</option>
                                                        <option value="Oktober" @if ($point1->bulan == 'Oktober') selected @endif>Oktober</option>
                                                        <option value="November" @if ($point1->bulan == 'November') selected @endif>November</option>
                                                        <option value="Desember" @if ($point1->bulan == 'Desember') selected @endif>Desember</option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih Bulan</div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="card-body ">
                                                        <button class="btn btn-primary" id="type-update"
                                                            onclick="return confirm('Apakah anda yakin ingin mengedit data?')">Simpan</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-secondary">Reset</button>
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
