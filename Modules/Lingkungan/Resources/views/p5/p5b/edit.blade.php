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
                                    <form method="POST" action="/Lingkungan/p5b/{{ $p5b->id }}"
                                        class="form form-vertical">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">

                                                {{-- <div class="mb-1">
                                                    <label class="form-label" for="nomer_surat">Nomer Surat</label>
                                                    <input type="text" id="nomer_surat" name="nomer_surat" required
                                                        autofocus value="{{ old('nomer_surat', $p5b->nomer_surat) }}"
                                                        class="form-control" placeholder="Nomer Surat"
                                                        aria-label="Nomer Surat" aria-describedby="nomer_surat" required />
                                                </div> --}}

                                                <div class="mb-1">
                                                    <label class="form-label" for="perihal">Perihal</label>
                                                    <input type="text" id="perihal" name="perihal" required autofocus
                                                        value="{{ old('perihal', $p5b->perihal) }}" class="form-control"
                                                        placeholder="Perihal" aria-label="Perihal"
                                                        aria-describedby="perihal" required />
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="divisi">Nama Unit</label>
                                                    <select class="form-select" id="divisi" name="divisi"  required
                                                    autofocus value="{{ old('divisi', $p5b->divisi) }}">
                                                        <option>{{ old('divisi', $p5b->divisi) }}</option>
                                                        <option value="KANTOR INDUK"@if ($p5b->divisi == 'KANTOR INDUK') selected @endif>KANTOR INDUK</option>
                                                        <option value="PT. PLN (Persero) UPDL BANJARBARU"@if ($p5b->divisi == 'PT. PLN (Persero) UPDL BANJARBARU') selected @endif>PT. PLN (Persero) UPDL BANJARBARU</option>
                                                        <option value="PT. PLN (Persero) UPDL BOGOR" @if ($p5b->divisi == 'PT. PLN (Persero) UPDL BOGOR') selected @endif>PT. PLN (Persero) UPDL BOGOR</option>
                                                        <option value="PT. PLN (Persero) UPDL JAKARTA" @if ($p5b->divisi == 'PT. PLN (Persero) UPDL JAKARTA') selected @endif>PT. PLN (Persero) UPDL JAKARTA</option>
                                                        <option value="PT. PLN (Persero) UPDL MAKASAR" @if ($p5b->divisi == 'PT. PLN (Persero) UPDL MAKASAR') selected @endif>PT. PLN (Persero) UPDL MAKASAR</option>
                                                        <option value="PT. PLN (Persero) UPDL PADANG" @if ($p5b->divisi == 'PT. PLN (Persero) UPDL PADANG') selected @endif>PT. PLN (Persero) UPDL PADANG</option>
                                                        <option value="PT. PLN (Persero) UPDL PALEMBANG" @if ($p5b->divisi == 'PT. PLN (Persero) UPDL PALEMBANG') selected @endif>PT. PLN (Persero) UPDL PALEMBANG</option>
                                                        <option value="PT. PLN (Persero) UPDL PANDAAN" @if ($p5b->divisi == 'PT. PLN (Persero) UPDL PANDAAN') selected @endif>PT. PLN (Persero) UPDL PANDAAN</option>
                                                        <option value="PT. PLN (Persero) UPDL SEMARANG" @if ($p5b->divisi == 'PT. PLN (Persero) UPDL SEMARANG') selected @endif>PT. PLN (Persero) UPDL SEMARANG</option>
                                                        <option value="PT. PLN (Persero) UPDL SURALAYA" @if ($p5b->divisi == 'PT. PLN (Persero) UPDL SURALAYA') selected @endif>PT. PLN (Persero) UPDL SURALAYA</option>
                                                        <option value="PT. PLN (Persero) UPDL TUNTUNGAN" @if ($p5b->divisi == 'UPDL UNTUNGAN') selected @endif>PT. PLN (Persero) UPDL TUNTUNGAN</option>
                                                    </select>
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="wulan">Triwulan</label>
                                                    <select class="form-select" id="wulan" name="wulan" required
                                                        autofocus value="{{ old('wulan', $p5b->wulan) }}">
                                                        <option>{{ old('wulan', $p5b->wulan) }}</option>
                                                        <option value="TW I"
                                                            @if ($p5b->wulan == 'TW I') selected @endif>TW I</option>
                                                        <option value="TW II"
                                                            @if ($p5b->wulan == 'TW II') selected @endif>TW II</option>
                                                        <option value="TW III"
                                                            @if ($p5b->wulan == 'TW III') selected @endif>TW III
                                                        </option>
                                                        <option value="TW IV"
                                                            @if ($p5b->wulan == 'TW IV') selected @endif>TW IV
                                                        </option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih</div>
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="bulan">Bulan</label>
                                                    <select class="form-select" id="bulan" name="bulan" required
                                                        autofocus value="{{ old('bulan', $p5b->bulan) }}"">
                                                        <option value="">-Pilih-</option>
                                                        <option value="Januari"
                                                            @if ($p5b->bulan == 'Januari') selected @endif>Januari
                                                        </option>
                                                        <option value="Februari"
                                                            @if ($p5b->bulan == 'Februari') selected @endif>Februari
                                                        </option>
                                                        <option value="Maret"
                                                            @if ($p5b->bulan == 'Maret') selected @endif>Maret
                                                        </option>
                                                        <option value="April"
                                                            @if ($p5b->bulan == 'April') selected @endif>April
                                                        </option>
                                                        <option value="Mei"
                                                            @if ($p5b->bulan == 'Mei') selected @endif>Mei</option>
                                                        <option value="Juni"
                                                            @if ($p5b->bulan == 'Juni') selected @endif>Juni
                                                        </option>
                                                        <option value="Juli"
                                                            @if ($p5b->bulan == 'Juli') selected @endif>Juli
                                                        </option>
                                                        <option value="Agustus"
                                                            @if ($p5b->bulan == 'Agustus') selected @endif>Agustus
                                                        </option>
                                                        <option value="September"
                                                            @if ($p5b->bulan == 'September') selected @endif>September
                                                        </option>
                                                        <option value="Oktober"
                                                            @if ($p5b->bulan == 'Oktober') selected @endif>Oktober
                                                        </option>
                                                        <option value="November"
                                                            @if ($p5b->bulan == 'November') selected @endif>November
                                                        </option>
                                                        <option value="Desember"
                                                            @if ($p5b->bulan == 'Desember') selected @endif>Desember
                                                        </option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih Bulan</div>
                                                </div>

                                                <div class="col-xl-12 col-md-6 col-12">
                                                    <div class="mb-1">
                                                        <label for="keterangan" class="form-label">Keterangan</label>
                                                        <input class="form-control" name="keterangan" type="text"
                                                            id="keterangan" required
                                                            autofocus value="{{ old('keterangan', $p5b->keterangan) }}">
                                                    </div>
                                                </div>

                                                <div class="mb-2">
                                                    <label class="d-block form-label"
                                                        for="catatan">Catatan</label>
                                                    <textarea class="form-control" id="catatan" name="catatan" placeholder="Catatan" rows="3"></textarea>
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label"
                                                        for="status">status</label>
                                                    <select class="form-select" id="status"
                                                        name="status" required>
                                                        <option> Validation </option>
                                                        <option value="direvisi">Revisi</option>
                                                        <option value="ditindak">Tindak Lanjut</option>
                                                    </select>
                                                </div>

                                                {{-- <div class="col-12 col-md-6">
                                                    <div class="mb-1">
                                                        <label>Unggah Berkas</label>
                                                        <input class="form-control" name="berkas" type="file"
                                                            id="berkas" required autofocus
                                                            value="{{ old('berkas', $p5b->berkas) }}">
                                                    </div>
                                                </div> --}}

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
