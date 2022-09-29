@extends('lingkungan::layouts.datalingkungan')
@section('tittle')
    Lingkungan - PPLH
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
                            <h2 class="content-header-title float-start mb-0">PPLH</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Pemenuhan Izin Perlindungan dan Pengelolaan
                                        Lingkungan Hidup
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addNewAddressModal">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- add new address modal -->
            <div class="modal fade" id="addNewAddressModal" tabindex="-1" aria-labelledby="addNewAddressTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pb-5 px-sm-4 mx-50">
                            <h3 class="address-title text-center mb-1" id="addNewAddressTitle">Pemenuhan Izin Perlindungan
                                dan Pengelolaan Lingkungan Hidup</h3>
                            <p class="address-subtitle text-center mb-2 pb-75"></p>

                            <form action="/Lingkungan/point2a" method="POST" enctype="multipart/form-data"
                                id="addNewAddressForm" class="row gy-1 gx-2">
                                @csrf
                                <div class="col-12">
                                    <div class="row custom-options-checkable">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12">
                                    <label class="form-label" for="jenis">Jenis Berkas</label>
                                    <select class="form-select" id="jenis" name="jenis">
                                        <option value="">-Pilih-</option>
                                        <option value="PPA_Air Laut">PPA_Air Laut</option>
                                        <option value="PPA (Domestik)">PPA (Domestik)</option>
                                        <option value="Pemanfaatan Air">Pemanfaatan Air</option>
                                        <option value="Penyimpanan Limbah B3">Penyimpanan Limbah B3</option>
                                        <option value="Penyimpanan Limbah B3">Penyimpanan Limbah B3</option>
                                        <option value="Penyimpanan Limbah Non B3 Terdaftar (FABA)">Penyimpanan Limbah Non B3
                                            Terdaftar (FABA)</option>
                                        <option value="Pemanfaatan Limbah Non B3 Terdaftar (FABA)">PemanfaatanLimbah Non B3
                                            Terdaftar (FABA)</option>
                                        <option value="Penimbunan Limbah Non B3 Terdaftar (FABA)">PenimbunanLimbah Non B3
                                            Terdaftar (FABA)</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Pilih Jenis</div>
                                </div>

                                <div class="col-12 col-md-12">
                                    <label class="form-label" for="nomer_surat">Nomer Surat</label>
                                    <input type="text" id="nomer_surat" name="nomer_surat" class="form-control"
                                        placeholder="Nomer Surat" aria-label="Nomer Surat" aria-describedby="nomer_surat" />
                                </div>

                                <div class="col-12 col-md-12">
                                    <label class="form-label" for="perihal">Perihal</label>
                                    <input type="text" id="perihal" name="perihal" class="form-control"
                                        placeholder="Nama Perusahaan" aria-label="Nama Perusahaan"
                                        aria-describedby="perihal" />
                                </div>

                                <div class="col-12 col-md-12">
                                    <label class="form-label" for="divisi">Nama Unit</label>
                                    <select class="form-select" id="divisi" name="divisi">
                                        <option>-Pilih-</option>
                                        <option value="UPDL Banjarbaru">UPDL BANJABARU</option>
                                        <option value="UPDL BOGOR">UPDL BOGOR</option>
                                        <option value="UPDL JAKARTA">UPDL JAKARTA</option>
                                        <option value="UPDL MAKASAR">UPDL MAKASAR</option>
                                        <option value="UPDL PADANG">UPDL PADANG</option>
                                        <option value="UPDL PALEMBANG">UPDL PALEMBANG</option>
                                        <option value="UPDL PANDAAN">UPDL PANDAAN</option>
                                        <option value="UPDL SEMARANG">UPDL SEMARANG</option>
                                        <option value="UPDL SURALAYA">UPDL SURALAYA</option>
                                        <option value="UPDL TUNTUNGAN">UPDL TUNTUNGAN</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="wulan">Triwulan</label>
                                    <select class="form-select" id="wulan" name="wulan">
                                        <option value="">-Pilih-</option>
                                        <option value="TW I">TW I</option>
                                        <option value="TW II">TW II</option>
                                        <option value="TW III">TW III</option>
                                        <option value="TW IV">TW IV</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Pilih</div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="bulan">Bulan</label>
                                    <select class="form-select" id="bulan" name="bulan">
                                        <option value="">-Pilih-</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Pilih Bulan</div>
                                </div>

                                <div class="mb-1 col-md-12">
                                    <label class="form-label" for="tanggal_dibuat">Tanggal Dibuat</label>
                                    <input type="datetime-local" id="tanggal_dibuat" name="tanggal_dibuat"
                                        class="form-control" />
                                </div>

                                <section id="form-control-repeater">
                                    <div class="invoice-repeater">
                                        <div data-repeater-list="point2doc">
                                            <div data-repeater-item>
                                                <div class="row d-flex align-items-end">
                                                    <div class="col-xl-6 col-md-6 col-12">
                                                        <div class="mb-1">
                                                            <label>Unggah Berkas</label>
                                                            <input class="form-control" name="berkas" type="file"
                                                                id="berkas" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12">
                                                        <div class="mb-1">
                                                            <label for="keterangan" class="form-label">Keterangan</label>
                                                            <input class="form-control" name="keterangan" type="text"
                                                                id="keterangan">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-12 mb-41">
                                                        <div class="mb-1">
                                                            <button class="btn btn-outline-danger text-nowrap px-1"
                                                                data-repeater-delete type="button">
                                                                <i data-feather="x" class="me-25"></i>
                                                                <span>Hapus</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <button class="btn btn-icon btn-primary" type="button"
                                                        data-repeater-create>
                                                        <i data-feather="plus" class="me-25"></i>
                                                        <span>Tambah</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary me-1 mt-2">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary mt-2" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        Discard
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end new form pop up -->

            <!-- / add new address modal -->

            {{-- <div class="content-body">
                <!-- Card Advance -->
                <div class="row match-height">

                    <!-- Payment Card -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card card-payment">
                            <div class="card-header">
                                <h4 class="card-title">Pemenuhan Izin Perlindungan dan Pengelolaan Lingkungan Hidup</h4>
                            </div>
                            <div class="card-body">

                                <form action="/Lingkungan/point2a" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                @if (session('status'))
                                     <div class="alert alert-success" style="padding: 10px">
                                    {{ session('status') }}
                                 </div>
                                @endif
                                    <div class="row">
                                        <!-- full Editor start -->

                                        <div class="mb-1">
                                            <label class="form-label" for="jenis">Jenis Berkas</label>
                                            <select class="form-select" id="jenis" name="jenis">
                                                <option value="">-Pilih-</option>
                                                <option value="PPA_Air Laut">PPA_Air Laut</option>
                                                <option value="PPA (Domestik)">PPA (Domestik)</option>
                                                <option value="Pemanfaatan Air">Pemanfaatan Air</option>
                                                <option value="Penyimpanan Limbah B3">Penyimpanan Limbah B3</option>
                                                <option value="Penyimpanan Limbah Non B3 Terdaftar (FABA)">Penyimpanan Limbah Non B3 Terdaftar (FABA)</option>
                                                <option value="Pemanfaatan Limbah Non B3 Terdaftar (FABA)">PemanfaatanLimbah Non B3 Terdaftar (FABA)</option>
                                                <option value="Penimbunan Limbah Non B3 Terdaftar (FABA)">PenimbunanLimbah Non B3 Terdaftar (FABA)</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Pilih Jenis</div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="nomer_surat">Nomer Surat</label>
                                            <input
                                            type="text"
                                            id="nomer_surat"
                                            name="nomer_surat"
                                            class="form-control"
                                            placeholder="Nomer Surat"
                                            aria-label="Nomer Surat"
                                            aria-describedby="nomer_surat"
                                            />
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="perihal">Perihal</label>
                                            <input
                                            type="text"
                                            id="perihal"
                                            name="perihal"
                                            class="form-control"
                                            placeholder="Nama Perusahaan"
                                            aria-label="Nama Perusahaan"
                                            aria-describedby="perihal"
                                            />
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="divisi">Kantor Cabang</label>
                                            <select class="form-select" id="divisi" name="divisi">
                                                <option>-Pilih-</option>
                                                <option value="UPDL Banjarbaru">UPDL BANJABARU</option>
                                                <option value="UPDL BOGOR">UPDL BOGOR</option>
                                                <option value="UPDL JAKARTA">UPDL JAKARTA</option>
                                                <option value="UPDL MAKASAR">UPDL MAKASAR</option>
                                                <option value="UPDL PADANG">UPDL PADANG</option>
                                                <option value="UPDL PALEMBANG">UPDL PALEMBANG</option>
                                                <option value="UPDL PANDAAN">UPDL PANDAAN</option>
                                                <option value="UPDL SEMARANG">UPDL SEMARANG</option>
                                                <option value="UPDL SURALAYA">UPDL SURALAYA</option>
                                                <option value="UPDL TUNTUNGAN">UPDL TUNTUNGAN</option>
                                            </select>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="wulan">Triwulan</label>
                                            <select class="form-select" id="wulan" name="wulan">
                                                <option value="">-Pilih-</option>
                                                <option value="TW I">TW I</option>
                                                <option value="TW II">TW II</option>
                                                <option value="TW III">TW III</option>
                                                <option value="TW IV">TW IV</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Pilih</div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label" for="bulan">Bulan</label>
                                            <select class="form-select" id="bulan" name="bulan">
                                                <option value="">-Pilih-</option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Pilih Bulan</div>
                                        </div>

                                        <div class="mb-1 col-md-12">
                                            <label class="form-label" for="tanggal_dibuat">Tanggal Dibuat</label>
                                            <input type="datetime-local" id="tanggal_dibuat" name="tanggal_dibuat" class="form-control"/>
                                        </div>

                                        <section id="form-control-repeater">
                                                <div class="invoice-repeater">
                                                    <div data-repeater-list="point2doc">
                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">
                                                                <div class="col-xl-4 col-md-6 col-12">
                                                                    <div class="mb-1">
                                                                        <label>Unggah Berkas</label>
                                                                        <input class="form-control" name="berkas"
                                                                        type="file" id="berkas" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-md-6 col-12">
                                                                    <div class="mb-1">
                                                                        <label for="keterangan" class="form-label">Keterangan</label>
                                                                        <input class="form-control" name="keterangan" type="text"
                                                                            id="keterangan" >
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2 col-12 mb-41">
                                                                    <div class="mb-1">
                                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                                            <i data-feather="x" class="me-25"></i>
                                                                            <span>Hapus</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-1">
                                                                <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                                                    <i data-feather="plus" class="me-25"></i>
                                                                    <span>Tambah</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda yakin?')">Submit</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                    <!--/ Payment Card -->
                </div>

                <!--/ Card Advance -->

            </div> --}}


            <!-- Basic table -->
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
                                        {{-- <th class="text-center">Nama Unit</th> --}}
                                        <th class="text-center">Triwulan</th>
                                        <th class="text-center">Bulan</th>
                                        <th class="text-center">Tanggal Dibuat</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if (!empty($point1s)) --}}
                                    @foreach ($point2s as $point2)
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $point2->jenis }}</td>
                                            <td class="text-center">{{ $point2->nomer_surat }}</td>
                                            <td class="text-center">{{ $point2->perihal }}</td>
                                            {{-- <td class="text-center">{{ $point2->divisi }}</td> --}}
                                            <td class="text-center">{{ $point2->wulan }}</td>
                                            <td class="text-center">{{ $point2->bulan }}</td>
                                            <td class="text-center">{{ $point2->tanggal_dibuat }}</td>
                                            <td class="text-center">
                                                <a href="/Lingkungan/point2a/{{ $point2->id }}"
                                                    class="btn btn-icon btn-success"><span data-feather="eye"></span></a>
                                                <a href="/Lingkungan/point2a/{{ $point2->id }}/edit"
                                                    class="btn btn-icon btn-warning" ><span
                                                        data-feather="edit"></span></a>

                                                <form action="/Lingkungan/point2a/{{ $point2->id }}" method="post"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-icon btn-danger border-0"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                                                        <span data-feather="trash-2">
                                                        </span>
                                                    </button>
                                                </form>
                                                {{-- <a href="#"  class="btn btn-icon btn-danger"><span data-feather="trash-2"></span></a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- @endif --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Basic table -->

        </div>
    </div>


    <!-- END: Content-->
@endsection






<!-- Modern Vertical Wizard -->
{{-- <section class="modern-vertical-wizard">
                    <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#account-details-vertical-modern" role="tab" id="account-details-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Kriteria 1</span>
                                        <span class="bs-stepper-subtitle">Leadership & Management Commitment</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#personal-info-vertical-modern" role="tab" id="personal-info-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="user" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Personal Info</span>
                                        <span class="bs-stepper-subtitle">Add Personal Info</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#address-step-vertical-modern" role="tab" id="address-step-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="map-pin" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Address</span>
                                        <span class="bs-stepper-subtitle">Add Address</span>
                                    </span>
                                </div>
                            </button>
                            <div class="step" data-target="#social-links-vertical-modern" role="tab" id="social-links-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="link" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Social Links</span>
                                        <span class="bs-stepper-subtitle">Add Social Links</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="account-details-vertical-modern" class="content" role="tabpanel" aria-labelledby="account-details-vertical-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Account Details</h5>
                                    <small class="text-muted">Enter Your Account Details.</small>
                                </div>
                               	<div class="col-lg-8 mx-auto my-5">
			                	@if (count($errors) > 0)
			                	<div class="alert alert-danger">
				            	@foreach ($errors->all() as $error)
				            	{{ $error }} <br/>
				            	@endforeach
			                	</div>
		                		@endif
                                <div class="row">
                                    <form action="/K3/proses" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_k3l">Menyusun RKAP Bidang K3</label>
                                        <input class="form-control" type="file" id="document_k3l" name="document_k3l" required />
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_k3l">Menerapan Contractor Safety Management System (CSMS)</label>
                                        <input class="form-control" type="file" id="document_k3l" name="document_k3l" required />
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_k3l">Membangun Sistem Manajemen K3 Terintegrasi</label>
                                        <input class="form-control" type="file" id="document_k3l" name="document_k3l" required />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-outline-secondary btn-prev" disabled>
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary w-5" type="submit" >Submit</button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="personal-info-vertical-modern" class="content" role="tabpanel" aria-labelledby="personal-info-vertical-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Personal Info</h5>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-first-name">First Name</label>
                                        <input type="text" id="vertical-modern-first-name" class="form-control" placeholder="John" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-last-name">Last Name</label>
                                        <input type="text" id="vertical-modern-last-name" class="form-control" placeholder="Doe" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-country">Country</label>
                                        <select class="select2 w-100" id="vertical-modern-country">
                                            <option label=" "></option>
                                            <option>UK</option>
                                            <option>USA</option>
                                            <option>Spain</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-language">Language</label>
                                        <select class="select2 w-100" id="vertical-modern-language" multiple>
                                            <option>English</option>
                                            <option>French</option>
                                            <option>Spanish</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="address-step-vertical-modern" class="content" role="tabpanel" aria-labelledby="address-step-vertical-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Address</h5>
                                    <small>Enter Your Address.</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-address">Address</label>
                                        <input type="text" id="vertical-modern-address" class="form-control" placeholder="98  Borough bridge Road, Birmingham" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-landmark">Landmark</label>
                                        <input type="text" id="vertical-modern-landmark" class="form-control" placeholder="Borough bridge" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="pincode4">Pincode</label>
                                        <input type="text" id="pincode4" class="form-control" placeholder="658921" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="city4">City</label>
                                        <input type="text" id="city4" class="form-control" placeholder="Birmingham" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="social-links-vertical-modern" class="content" role="tabpanel" aria-labelledby="social-links-vertical-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Social Links</h5>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-twitter">Twitter</label>
                                        <input type="text" id="vertical-modern-twitter" class="form-control" placeholder="https://twitter.com/abc" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-facebook">Facebook</label>
                                        <input type="text" id="vertical-modern-facebook" class="form-control" placeholder="https://facebook.com/abc" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-google">Google+</label>
                                        <input type="text" id="vertical-modern-google" class="form-control" placeholder="https://plus.google.com/abc" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-linkedin">Linkedin</label>
                                        <input type="text" id="vertical-modern-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-success btn-submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
<!-- /Modern Vertical Wizard -->
