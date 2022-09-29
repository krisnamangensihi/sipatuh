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
                                    <form method="POST" action="/Lingkungan/p7b/{{ $p7b->id }}"
                                        class="form form-vertical">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">

                                                {{-- <div class="mb-1">
                                                    <label class="form-label" for="jenis">Jenis Berkas</label>
                                                    <select class="form-select" id="jenis" name="jenis" required
                                                        autofocus value="{{ old('jenis', $p7b->jenis) }}">
                                                        <option>{{ old('jenis', $p7b->jenis) }}</option>
                                                        <option value="PPA_Air Laut"
                                                            @if ($p7b->jenis == 'PPA_Air Laut') selected @endif>PPA_Air Laut
                                                        </option>
                                                        <option value="PPA (Domestik)"
                                                            @if ($p7b->jenis == 'PPA (Domestik)') selected @endif>PPA (Domestik)
                                                        </option>
                                                        <option value="Pemanfaatan Air"
                                                            @if ($p7b->jenis == 'Pemanfaatan Air') selected @endif>Pemanfaatan
                                                            Air</option>
                                                        <option value="Penyimpanan Limbah B3"
                                                            @if ($p7b->jenis == 'Penyimpanan Limbah B3') selected @endif>Penyimpanan
                                                            Limbah B3</option>
                                                        <option value="Penyimpanan Limbah Non B3 Terdaftar (FABA)"
                                                            @if ($p7b->jenis == 'Penyimpanan Limbah Non B3 Terdaftar (FABA)') selected @endif>Penyimpanan
                                                            Limbah Non B3 Terdaftar (FABA)</option>
                                                        <option value="Pemanfaatan Limbah Non B3 Terdaftar (FABA)"
                                                            @if ($p7b->jenis == 'PemanfaatanLimbah Non B3 Terdaftar (FABA)') selected @endif>
                                                            PemanfaatanLimbah Non B3 Terdaftar (FABA)</option>
                                                        <option value="Penimbunan Limbah Non B3 Terdaftar (FABA)"
                                                            @if ($p7b->jenis == 'PenimbunanLimbah Non B3 Terdaftar (FABA)') selected @endif>
                                                            PenimbunanLimbah Non B3 Terdaftar (FABA)</option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih Jenis</div>
                                                </div> --}}

                                                <div class="mb-1">
                                                    <label class="form-label" for="nomer_surat">Nomor Sertifikat</label>
                                                    <input type="text" id="nomer_surat" name="nomer_surat" required
                                                        autofocus value="{{ old('nomer_surat', $p7b->nomer_surat) }}"
                                                        class="form-control" placeholder="Nomor Sertifikat"
                                                        aria-label="Nomor Sertifikat" aria-describedby="nomer_surat" required />
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="nomer_analisis">Nomor Analisis</label>
                                                    <input type="text" id="nomer_analisis" name="nomer_analisis" required
                                                        autofocus value="{{ old('nomer_analisis', $p7b->nomer_analisis) }}"
                                                        class="form-control" placeholder="Nomor Analisis"
                                                        aria-label="Nomor Analisis" aria-describedby="nomer_Analisis" required />
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="deskripsi">Deskripsi</label>
                                                    <input type="text" id="deskripsi" name="deskripsi" required
                                                        autofocus value="{{ old('deskripsi', $p7b->deskripsi) }}"
                                                        class="form-control" placeholder="Deskripsi"
                                                        aria-label="Deskripsi" aria-describedby="deskripsi" required />
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="lokasi">Lokasi</label>
                                                    <input type="text" id="lokasi" name="lokasi" required autofocus
                                                        value="{{ old('lokasi', $p7b->lokasi) }}" class="form-control"
                                                        placeholder="Lokasi" aria-label="Lokasi"
                                                        aria-describedby="lokasi" required />
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="divisi">Nama Unit</label>
                                                    <select class="form-select" id="divisi" name="divisi"  required
                                                    autofocus value="{{ old('divisi', $p7b->divisi) }}">
                                                        <option>{{ old('divisi', $p7b->divisi) }}</option>
                                                        <option value="KANTOR INDUK"@if ($p7b->divisi == 'KANTOR INDUK') selected @endif>KANTOR INDUK</option>
                                                        <option value="PT. PLN (Persero) UPDL BANJARBARU"@if ($p7b->divisi == 'PT. PLN (Persero) UPDL BANJARBARU') selected @endif>PT. PLN (Persero) UPDL BANJARBARU</option>
                                                        <option value="PT. PLN (Persero) UPDL BOGOR" @if ($p7b->divisi == 'PT. PLN (Persero) UPDL BOGOR') selected @endif>PT. PLN (Persero) UPDL BOGOR</option>
                                                        <option value="PT. PLN (Persero) UPDL JAKARTA" @if ($p7b->divisi == 'PT. PLN (Persero) UPDL JAKARTA') selected @endif>PT. PLN (Persero) UPDL JAKARTA</option>
                                                        <option value="PT. PLN (Persero) UPDL MAKASAR" @if ($p7b->divisi == 'PT. PLN (Persero) UPDL MAKASAR') selected @endif>PT. PLN (Persero) UPDL MAKASAR</option>
                                                        <option value="PT. PLN (Persero) UPDL PADANG" @if ($p7b->divisi == 'PT. PLN (Persero) UPDL PADANG') selected @endif>PT. PLN (Persero) UPDL PADANG</option>
                                                        <option value="PT. PLN (Persero) UPDL PALEMBANG" @if ($p7b->divisi == 'PT. PLN (Persero) UPDL PALEMBANG') selected @endif>PT. PLN (Persero) UPDL PALEMBANG</option>
                                                        <option value="PT. PLN (Persero) UPDL PANDAAN" @if ($p7b->divisi == 'PT. PLN (Persero) UPDL PANDAAN') selected @endif>PT. PLN (Persero) UPDL PANDAAN</option>
                                                        <option value="PT. PLN (Persero) UPDL SEMARANG" @if ($p7b->divisi == 'PT. PLN (Persero) UPDL SEMARANG') selected @endif>PT. PLN (Persero) UPDL SEMARANG</option>
                                                        <option value="PT. PLN (Persero) UPDL SURALAYA" @if ($p7b->divisi == 'PT. PLN (Persero) UPDL SURALAYA') selected @endif>PT. PLN (Persero) UPDL SURALAYA</option>
                                                        <option value="PT. PLN (Persero) UPDL TUNTUNGAN" @if ($p7b->divisi == 'UPDL UNTUNGAN') selected @endif>PT. PLN (Persero) UPDL TUNTUNGAN</option>
                                                    </select>
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="wulan">Triwulan</label>
                                                    <select class="form-select" id="wulan" name="wulan" required
                                                        autofocus value="{{ old('wulan', $p7b->wulan) }}">
                                                        <option>{{ old('wulan', $p7b->wulan) }}</option>
                                                        <option value="TW I"
                                                            @if ($p7b->wulan == 'TW I') selected @endif>TW I</option>
                                                        <option value="TW II"
                                                            @if ($p7b->wulan == 'TW II') selected @endif>TW II</option>
                                                        <option value="TW III"
                                                            @if ($p7b->wulan == 'TW III') selected @endif>TW III
                                                        </option>
                                                        <option value="TW IV"
                                                            @if ($p7b->wulan == 'TW IV') selected @endif>TW IV
                                                        </option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih</div>
                                                </div>

                                                <div class="mb-1">
                                                    <label class="form-label" for="bulan">Periode</label>
                                                    <select class="form-select" id="bulan" name="bulan" required
                                                        autofocus value="{{ old('bulan', $p7b->bulan) }}"">
                                                        <option value="">-Pilih-</option>
                                                        <option value="Januari"
                                                            @if ($p7b->bulan == 'Januari') selected @endif>Januari
                                                        </option>
                                                        <option value="Februari"
                                                            @if ($p7b->bulan == 'Februari') selected @endif>Februari
                                                        </option>
                                                        <option value="Maret"
                                                            @if ($p7b->bulan == 'Maret') selected @endif>Maret
                                                        </option>
                                                        <option value="April"
                                                            @if ($p7b->bulan == 'April') selected @endif>April
                                                        </option>
                                                        <option value="Mei"
                                                            @if ($p7b->bulan == 'Mei') selected @endif>Mei</option>
                                                        <option value="Juni"
                                                            @if ($p7b->bulan == 'Juni') selected @endif>Juni
                                                        </option>
                                                        <option value="Juli"
                                                            @if ($p7b->bulan == 'Juli') selected @endif>Juli
                                                        </option>
                                                        <option value="Agustus"
                                                            @if ($p7b->bulan == 'Agustus') selected @endif>Agustus
                                                        </option>
                                                        <option value="September"
                                                            @if ($p7b->bulan == 'September') selected @endif>September
                                                        </option>
                                                        <option value="Oktober"
                                                            @if ($p7b->bulan == 'Oktober') selected @endif>Oktober
                                                        </option>
                                                        <option value="November"
                                                            @if ($p7b->bulan == 'November') selected @endif>November
                                                        </option>
                                                        <option value="Desember"
                                                            @if ($p7b->bulan == 'Desember') selected @endif>Desember
                                                        </option>
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Pilih Bulan</div>
                                                </div>

                                                {{-- <div class="col-md-12 mb-1">
                                                    <label class="form-label" for="periode">Periode</label>
                                                    <input type="text" id="periode" name="periode"
                                                        class="form-control flatpickr-range"
                                                        placeholder="YYYY-MM-DD to YYYY-MM-DD" required autofocus
                                                        value="{{ old('periode', $p7b->periode) }}" />
                                                </div> --}}

                                                <div class="col-xl-12 col-md-6 col-12">
                                                    <div class="mb-1">
                                                        <label for="keterangan" class="form-label">Keterangan</label>
                                                        <input class="form-control" name="keterangan" type="text"
                                                            id="keterangan" required autofocus
                                                            value="{{ old('keterangan', $p7b->keterangan) }}">
                                                    </div>
                                                </div>

                                                <div class="mb-2">
                                                    <label class="d-block form-label" for="catatan">Catatan</label>
                                                    <textarea class="form-control" id="catatan" name="catatan" placeholder="Catatan" rows="3"></textarea>
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="status">status</label>
                                                    <select class="form-select" id="status" name="status" required>
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
                                                            value="{{ old('berkas', $p7b->berkas) }}">
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
