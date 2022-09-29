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
                                    <form method="POST" action="/Lingkungan/point3a/{{ $point3->id }}" class="form form-vertical">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="mb-1">
                                                    <label class="form-label" for="jenis">Jenis Berkas</label>
                                                        <select class="form-select" id="jenis" name="jenis"
                                                            required autofocus value="{{ old('jenis',$point3->jenis) }}">
                                                        <option>{{ old('jenis', $point3->jenis) }}</option>
                                                            <option value="Pengendalian Pencemaran Air" @if($point3->jenis == "Pengendalian Pencemaran Air") selected @endif>Pengendalian Pencemaran Air</option>
                                                            <option value="Pengendalian pencemaran Udara" @if($point3->jenis == "Pengendalian pencemaran Udara") selected @endif>Pengendalian pencemaran Udara</option>
                                                            <option value="Pemenuhan CEMS, SISPEK, BME" @if($point3->jenis == "Pemenuhan CEMS, SISPEK, BME") selected @endif>Pemenuhan CEMS, SISPEK, BME</option>
                                                            <option value="Pemenuhan Emisi GRK" @if($point3->jenis == "Pemenuhan Emisi GRK") selected @endif>Pemenuhan Emisi GRK</option>
                                                        </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih Jenis</div>
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="perihal">Nomer Surat</label>
                                                    <input
                                                    type="text"
                                                    id="nomer_surat"
                                                    name="nomer_surat"
                                                    required autofocus value="{{ old('nomer_surat', $point3->nomer_surat) }}"
                                                    class="form-control"
                                                    placeholder="Nomer Surat"
                                                    aria-label="Nomer Surat"
                                                    aria-describedby="nomer_surat"
                                                    required
                                                    />
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="perihal">Perihal</label>
                                                    <input
                                                    type="text"
                                                    id="perihal"
                                                    name="perihal"
                                                    required autofocus value="{{ old('perihal', $point3->perihal) }}"
                                                    class="form-control"
                                                    placeholder="Perihal"
                                                    aria-label="Perihal"
                                                    aria-describedby="perihal"
                                                    required
                                                    />
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="wulan">Triwulan</label>
                                                    <select class="form-select" id="wulan" name="wulan"
                                                    required autofocus value="{{ old('wulan',$point3->wulan) }}">
                                                        <option >{{ old('wulan',$point3->wulan) }}</option>
                                                        <option value="TW I" @if($point3->wulan == "TW I") selected @endif>TW I</option>
                                                        <option value="TW II" @if($point3->wulan == "TW II") selected @endif>TW II</option>
                                                        <option value="TW III" @if($point3->wulan == "TW III") selected @endif>TW III</option>
                                                        <option value="TW IV" @if($point3->wulan == "TW IV") selected @endif>TW IV</option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih</div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="bulan">Bulan</label>
                                                    <select class="form-select" id="bulan" name="bulan"
                                                        required autofocus value="{{ old('bulan', $point3->bulan) }}"">
                                                        <option value="">-Pilih-</option>
                                                        <option value="Januari" @if ($point3->bulan == 'Januari') selected @endif>Januari</option>
                                                        <option value="Februari" @if ($point3->bulan == 'Februari') selected @endif>Februari</option>
                                                        <option value="Maret" @if ($point3->bulan == 'Maret') selected @endif>Maret</option>
                                                        <option value="April" @if ($point3->bulan == 'April') selected @endif>April</option>
                                                        <option value="Mei" @if ($point3->bulan == 'Mei') selected @endif>Mei</option>
                                                        <option value="Juni" @if ($point3->bulan == 'Juni') selected @endif>Juni</option>
                                                        <option value="Juli" @if ($point3->bulan == 'Juli') selected @endif>Juli</option>
                                                        <option value="Agustus" @if ($point3->bulan == 'Agustus') selected @endif>Agustus</option>
                                                        <option value="September" @if ($point3->bulan == 'September') selected @endif>September</option>
                                                        <option value="Oktober" @if ($point3->bulan == 'Oktober') selected @endif>Oktober</option>
                                                        <option value="November" @if ($point3->bulan == 'November') selected @endif>November</option>
                                                        <option value="Desember" @if ($point3->bulan == 'Desember') selected @endif>Desember</option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih Bulan</div>
                                                </div>

                                        <div class="col-12">
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
