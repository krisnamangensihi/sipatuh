@extends('lingkungan::layouts.datalingkungan')
@section('tittle')
    Inventarisasi Dokling dan IL
@endsection
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Isi Data</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Upload
                                    </li>
                                    <li class="breadcrumb-item active">Dokling dan IL
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
            <div class="content-body">

                <!-- form -->
                {{-- <section>
                    <div class="col-md-12 col-12">
                        <div class="card">

                            <div class="card-header">
                                <h4 class="card-title">Pemenuhan DokLing dan IL atau Persetujuan lingkungan</h4>
                            </div>

                            <div class="card-body">
                                <form class="form" action="/Lingkungan/point1a" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @if (session('status'))
                                        <div class="alert alert-success" style="padding: 10px">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <div class="mb-1">
                                        <a href="https://drive.google.com/drive/folders/1BbNgC_ARDu9nYiT9-3rr2MqXnIhnCcfN?usp=sharing"
                                            target="blank">Format Form SA</a>
                                    </div>

                                    <div class="mb-1">
                                        <label class="form-label" for="jenis">Jenis Berkas</label>
                                        <select class="form-select" id="jenis" name="jenis" required>
                                            <option value="">-Pilih-</option>
                                            <option value="Inventarisasi DokLing & IL">Inventarisasi DokLing & IL</option>
                                            <option value="DokLing & IL">DokLing & IL</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Pilih Jenis</div>
                                    </div>

                                    <div class="mb-1">
                                        <label class="form-label" for="dok">Jenis Dokumen</label>
                                        <select class="form-select" id="dok" name="dok">
                                            <option value="">-Pilih-</option>
                                            <option value="SA-Profile Perusahaan">SA-Profile Perusahaan</option>
                                            <option value="SA-Izin Lingkungan">SA-Izin Lingkungan</option>
                                        </select>
                                    </div>

                                    <div class="mb-1">
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
                                        <input type="datetime-local" id="tanggal_dibuat" name="tanggal_dibuat"
                                            class="form-control" />
                                    </div>

                                    <section id="form-control-repeater">
                                        <div class="invoice-repeater">
                                            <div data-repeater-list="point1doc">
                                                <div data-repeater-item>
                                                    <div class="row d-flex align-items-end">
                                                        <div class="col-xl-4 col-md-6 col-12">
                                                            <div class="mb-1">
                                                                <label>Unggah Berkas</label>
                                                                <input class="form-control" name="berkas" type="file"
                                                                    id="berkas" required>
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

                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-success"
                                            onclick="return confirm('Apakah anda yakin?')">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </section> --}}
                <!-- end form -->

                <!-- add new address modal -->
                <div class="modal fade" id="addNewAddressModal" tabindex="-1" aria-labelledby="addNewAddressTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-4 mx-50">
                                <h3 class="address-title text-center mb-1" id="addNewAddressTitle">Pemenuhan DokLing dan IL
                                    atau Persetujuan lingkungan
                                </h3>
                                <div class="mb-1">
                                    <a href="https://drive.google.com/drive/folders/1BbNgC_ARDu9nYiT9-3rr2MqXnIhnCcfN?usp=sharing"
                                        target="blank">Format Form SA</a>
                                </div>
                                {{-- <p class="address-subtitle text-center mb-2 pb-75"></p> --}}

                                <form action="/Lingkungan/point1a" method="POST" enctype="multipart/form-data"
                                    id="addNewAddressForm" class="row gy-1 gx-2">
                                    @csrf
                                    <div class="col-12">
                                        <div class="row custom-options-checkable">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="jenis">Jenis Berkas</label>
                                        <select class="form-select" id="jenis" name="jenis" required>
                                            <option value="">-Pilih-</option>
                                            <option value="Inventarisasi DokLing & IL">Inventarisasi DokLing & IL</option>
                                            <option value="DokLing & IL">DokLing & IL</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Pilih Jenis</div>
                                    </div>

                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="dok">Jenis Dokumen</label>
                                        <select class="form-select" id="dok" name="dok">
                                            <option value="">-Pilih-</option>
                                            <option value="SA-Profile Perusahaan">SA-Profile Perusahaan</option>
                                            <option value="SA-Izin Lingkungan">SA-Izin Lingkungan</option>
                                        </select>
                                    </div>

                                    {{-- <div class="col-12 col-md-12">
                                        <label class="form-label" for="nomer_surat">Nomer Surat</label>
                                        <input type="text" id="nomer_surat" name="nomer_surat" class="form-control"
                                            placeholder="Nomer Surat" aria-label="Nomer Surat"
                                            aria-describedby="nomer_surat" />
                                    </div> --}}

                                    {{-- <div class="col-12 col-md-12">
                                        <label class="form-label" for="perihal">Perihal</label>
                                        <input type="text" id="perihal" name="perihal" class="form-control"
                                            placeholder="Nama Perusahaan" aria-label="Nama Perusahaan"
                                            aria-describedby="perihal" />
                                    </div> --}}

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
                                            <div data-repeater-list="point1doc">
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
                                                                <label for="keterangan"
                                                                    class="form-label">Keterangan</label>
                                                                <input class="form-control" name="keterangan"
                                                                    type="text" id="keterangan">
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
                                        <button type="reset" class="btn btn-outline-secondary mt-2"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end new form pop up -->


            </div>

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
                                        <th class="text-center">Jenis Dokumen</th>
                                        <th class="text-center">Nama Unit</th>
                                        <th class="text-center">Triwulan</th>
                                        <th class="text-center">Bulan</th>
                                        <th class="text-center">Tanggal Dibuat</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if (!empty($point1s)) --}}
                                    @foreach ($point1s as $point1)
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $point1->jenis }}</td>
                                            <td class="text-center">{{ $point1->dok }}</td>
                                            <td class="text-center">{{ $point1->divisi }}</td>
                                            <td class="text-center">{{ $point1->wulan }}</td>
                                            <td class="text-center">{{ $point1->bulan }}</td>
                                            <td class="text-center">{{ $point1->tanggal_dibuat }}</td>
                                            <td class="text-center">
                                                <a href="/Lingkungan/point1a/{{ $point1->id }}"
                                                    class="btn btn-icon btn-success"><span data-feather="eye"></span></a>
                                                <a href="/Lingkungan/point1a/{{ $point1->id }}/edit"
                                                    class="btn btn-icon btn-warning" ><span
                                                        data-feather="edit"></span></a>

                                                <form action="/Lingkungan/point1a/{{ $point1->id }}" method="post"
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
@endsection
