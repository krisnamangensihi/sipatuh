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
                                    <form method="POST" action="/Lingkungan/p1a/{{ $p1a->id }}"
                                        class="form form-vertical">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="mb-1">
                                                    <label class="form-label" for="jenis">Jenis Berkas</label>
                                                    <select class="form-select" id="jenis" name="jenis" required
                                                        autofocus value="{{ old('jenis', $p1a->jenis) }}">
                                                        <option>{{ old('jenis', $p1a->jenis) }}</option>
                                                        <option value="SA-Profile Perusahaan"
                                                            @if ($p1a->jenis == 'SA-Profile Perusahaan') selected @endif>SA-Profile Perusahaan
                                                        </option>
                                                        <option value="SA-Izin Lingkungan"
                                                            @if ($p1a->jenis == 'SA-Izin Lingkungan') selected @endif>SA-Izin Lingkungan
                                                        </option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih Jenis</div>
                                                </div>

                                                {{-- <div class="mb-1">
                                                    <label class="form-label" for="nomer_surat">Nomer Surat</label>
                                                    <input type="text" id="nomer_surat" name="nomer_surat" required
                                                        autofocus value="{{ old('nomer_surat', $p1a->nomer_surat) }}"
                                                        class="form-control" placeholder="Nomer Surat"
                                                        aria-label="Nomer Surat" aria-describedby="nomer_surat" required />
                                                </div> --}}

                                                {{-- <div class="mb-1">
                                                    <label class="form-label" for="perihal">Perihal</label>
                                                    <input type="text" id="perihal" name="perihal" required autofocus
                                                        value="{{ old('perihal', $p1a->perihal) }}" class="form-control"
                                                        placeholder="Perihal" aria-label="Perihal"
                                                        aria-describedby="perihal" required />
                                                </div> --}}

                                                <div class="mb-1">
                                                    <label class="form-label" for="divisi">Nama Unit</label>
                                                    <select class="form-select" id="divisi" name="divisi"  required
                                                    autofocus value="{{ old('divisi', $p1a->divisi) }}">
                                                        <option>{{ old('divisi', $p1a->divisi) }}</option>
                                                        <option value="KANTOR INDUK"@if ($p1a->divisi == 'KANTOR INDUK') selected @endif>KANTOR INDUK</option>
                                                        <option value="UPDL BANJARBARU"@if ($p1a->divisi == 'UPDL BANJARBARU') selected @endif>UPDL BANJABARU</option>
                                                        <option value="UPDL BOGOR" @if ($p1a->divisi == 'UPDL BOGOR') selected @endif>UPDL BOGOR</option>
                                                        <option value="UPDL JAKARTA" @if ($p1a->divisi == 'UPDL JAKARTA') selected @endif>UPDL JAKARTA</option>
                                                        <option value="UPDL MAKASAR" @if ($p1a->divisi == 'UPDL MAKASAR') selected @endif>UPDL MAKASAR</option>
                                                        <option value="UPDL PADANG" @if ($p1a->divisi == 'UPDL MAKASAR') selected @endif>UPDL PADANG</option>
                                                        <option value="UPDL PALEMBANG" @if ($p1a->divisi == 'UPDL PALEMBANG') selected @endif>UPDL PALEMBANG</option>
                                                        <option value="UPDL PANDAAN" @if ($p1a->divisi == 'UPDL PANDAAN') selected @endif>UPDL PANDAAN</option>
                                                        <option value="UPDL SEMARANG" @if ($p1a->divisi == 'UPDL SEMARANG') selected @endif>UPDL SEMARANG</option>
                                                        <option value="UPDL SURALAYA" @if ($p1a->divisi == 'UPDL SURALAYA') selected @endif>UPDL SURALAYA</option>
                                                        <option value="UPDL TUNTUNGAN" @if ($p1a->divisi == 'UPDL UNTUNGAN') selected @endif>UPDL TUNTUNGAN</option>
                                                    </select>
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="wulan">Triwulan</label>
                                                    <select class="form-select" id="wulan" name="wulan" required
                                                        autofocus value="{{ old('wulan', $p1a->wulan) }}">
                                                        <option>{{ old('wulan', $p1a->wulan) }}</option>
                                                        <option value="TW I"
                                                            @if ($p1a->wulan == 'TW I') selected @endif>TW I</option>
                                                        <option value="TW II"
                                                            @if ($p1a->wulan == 'TW II') selected @endif>TW II</option>
                                                        <option value="TW III"
                                                            @if ($p1a->wulan == 'TW III') selected @endif>TW III
                                                        </option>
                                                        <option value="TW IV"
                                                            @if ($p1a->wulan == 'TW IV') selected @endif>TW IV
                                                        </option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih</div>
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="bulan">Bulan</label>
                                                    <select class="form-select" id="bulan" name="bulan" required
                                                        autofocus value="{{ old('bulan', $p1a->bulan) }}"">
                                                        <option value="">-Pilih-</option>
                                                        <option value="Januari"
                                                            @if ($p1a->bulan == 'Januari') selected @endif>Januari
                                                        </option>
                                                        <option value="Februari"
                                                            @if ($p1a->bulan == 'Februari') selected @endif>Februari
                                                        </option>
                                                        <option value="Maret"
                                                            @if ($p1a->bulan == 'Maret') selected @endif>Maret
                                                        </option>
                                                        <option value="April"
                                                            @if ($p1a->bulan == 'April') selected @endif>April
                                                        </option>
                                                        <option value="Mei"
                                                            @if ($p1a->bulan == 'Mei') selected @endif>Mei</option>
                                                        <option value="Juni"
                                                            @if ($p1a->bulan == 'Juni') selected @endif>Juni
                                                        </option>
                                                        <option value="Juli"
                                                            @if ($p1a->bulan == 'Juli') selected @endif>Juli
                                                        </option>
                                                        <option value="Agustus"
                                                            @if ($p1a->bulan == 'Agustus') selected @endif>Agustus
                                                        </option>
                                                        <option value="September"
                                                            @if ($p1a->bulan == 'September') selected @endif>September
                                                        </option>
                                                        <option value="Oktober"
                                                            @if ($p1a->bulan == 'Oktober') selected @endif>Oktober
                                                        </option>
                                                        <option value="November"
                                                            @if ($p1a->bulan == 'November') selected @endif>November
                                                        </option>
                                                        <option value="Desember"
                                                            @if ($p1a->bulan == 'Desember') selected @endif>Desember
                                                        </option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih Bulan</div>
                                                </div>

                                                {{-- <div class="mb-1">
                                                    <div class="mb-1">
                                                        <label>Unggah Berkas</label>
                                                        <input class="form-control" name="berkas" type="file"
                                                            id="berkas" required autofocus
                                                            value="{{ old('berkas', $p1a->berkas) }}">
                                                    </div>
                                                </div> --}}

                                                {{-- <div class="mb-1">
                                                    <div class="mb-1">
                                                        <label for="keterangan" class="form-label">Keterangan</label>
                                                        <input class="form-control" name="keterangan" type="text"
                                                            id="keterangan" required autofocus
                                                            value="{{ old('keterangan', $p1a->keterangan) }}">
                                                    </div>
                                                </div> --}}

                                                <div class="mb-1">
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
