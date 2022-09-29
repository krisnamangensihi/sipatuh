@extends('lingkungan::layouts.point2a')
@section('tittle')
    A. Inventarisasi Dokling dan IL
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
                                    <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Upload
                                    </li>
                                    <li class="breadcrumb-item active">Form SA-Profile Perusahaan
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                <section>
                    <div class="col-md-12 col-12">
                        <div class="card">

                          <div class="card-header">
                            <h4 class="card-title">Form SA-Profile Perusahaan</h4>
                            <div class="d-flex justify-content-between">
                                <a href="/Lingkungan/tabel">
                                    <button class="btn btn-primary">Tabel</button>
                                </a>
                            </div>
                          </div>

                          <div class="card-body">
                            <form class="form" action="/Lingkungan/saprofile" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (session('status'))
                                     <div class="alert alert-success" style="padding: 10px">
                                    {{ session('status') }}
                                 </div>
                                @endif
                                <div class="mb-1">
                                    <label class="form-label" for="nama_perusahaan">Nama Perusahaan</label>
                                    <input
                                    type="text"
                                    id="nama_perusahaan"
                                    name="nama_perusahaan"
                                    class="form-control"
                                    placeholder="Nama Perusahaan"
                                    aria-label="Nama Perusahaan"
                                    aria-describedby="Nama Perusahaan"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Nama Perusahaan.</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="alamat_kegiatan">Alamat Lokasi Kegiatan</label>
                                    <input
                                    type="text"
                                    id="alamat_kegiatan"
                                    name="alamat_kegiatan"
                                    class="form-control"
                                    placeholder="Alamat Lokasi Kegiatan"
                                    aria-label="Alamat Lokasi Kegiatan"
                                    aria-describedby="alamat_kegiatan"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Alamat Lokasi Kegiatan.</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="no_perusahaan">Telp./Fax. (Perusahaan)</label>
                                    <input
                                    type="number"
                                    id="no_perusahaan"
                                    name="no_perusahaan"
                                    class="form-control"
                                    placeholder="Telp./Fax"
                                    aria-label="Telp./Fax"
                                    aria-describedby="no_perusahaan"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter your Nama.</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="alamat_kantor">Alamat Kantor Pusat/Perwakilan</label>
                                    <input
                                    type="text"
                                    id="alamat_kantor"
                                    name="alamat_kantor"
                                    class="form-control"
                                    placeholder="Alamat Kantor Pusat/Perwakilani"
                                    aria-label="Alamat Kantor Pusat/Perwakilani"
                                    aria-describedby="alamat_kantor"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Alamat Kantor Pusat/Perwakilan.</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="no_kantor">Telp./Fax. (kantor Pusat/Perwakilan)</label>
                                    <input
                                    type="number"
                                    id="no_kantor"
                                    name="no_kantor"
                                    class="form-control"
                                    placeholder="Telp./Fax."
                                    aria-label="Telp./Fax."
                                    aria-describedby="no_kantor"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Telp./Fax.</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="holding">Nama Holding Company</label>
                                    <input
                                    type="text"
                                    id="holding"
                                    name="holding"
                                    class="form-control"
                                    placeholder="Nama Holding Company"
                                    aria-label="Nama Holding Company"
                                    aria-describedby="holding"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Nama Holding Company.</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="alamat_holding">Alamat Kantor Holding Company</label>
                                    <input
                                    type="text"
                                    id="alamat_holding"
                                    name="alamat_holding"
                                    class="form-control"
                                    placeholder="Alamat Kantor Holding Company"
                                    aria-label="Alamat Kantor Holding Company"
                                    aria-describedby="alamat_holding"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Alamat Kantor Holding Company.</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="no_holding">Telp./Fax. (Kantor Holding Company)</label>
                                    <input
                                    type="number"
                                    id="no_holding"
                                    name="no_holding"
                                    class="form-control"
                                    placeholder="Telp./Fax."
                                    aria-label="Telp./Fax."
                                    aria-describedby="no_holding"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Telp./Fax.</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="tahun">Tahun Berdiri Perusahaan/ Beroperasi Perusahaan</label>
                                    <input
                                    type="number"
                                    id="tahun"
                                    name="tahun"
                                    class="form-control"
                                    placeholder="Tahun Berdiri Perusahaan/ Beroperasi Perusahaan"
                                    aria-label="Tahun Berdiri Perusahaan/ Beroperasi Perusahaan"
                                    aria-describedby="tahun"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Tahun Berdiri Perusahaan/ Beroperasi Perusahaan</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="jenis">Jenis Industri</label>
                                    <input
                                    type="text"
                                    id="jenis"
                                    name="jenis"
                                    class="form-control"
                                    placeholder="Jenis Industri"
                                    aria-label="Jenis Industri"
                                    aria-describedby="jenis"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Jenis Industri</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="modal">Status Permodalan</label>
                                    <input
                                    type="text"
                                    id="modal"
                                    name="modal"
                                    class="form-control"
                                    placeholder="Status Permodalan"
                                    aria-label="Status Permodalan"
                                    aria-describedby="modal"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Status Permodalan</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="luas">Luas Area Pabrik/Lokasi Kegatan</label>
                                    <input
                                    type="text"
                                    id="luas"
                                    name="luas"
                                    class="form-control"
                                    placeholder="Luas Area Pabrik/Lokasi Kegatan"
                                    aria-label="Luas Area Pabrik/Lokasi Kegatan"
                                    aria-describedby="luas"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Luas Area Pabrik/Lokasi Kegatan</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="jumlah">Jumlah Karyawan</label>
                                    <input
                                    type="text"
                                    id="jumlah"
                                    name="jumlah"
                                    class="form-control"
                                    placeholder="Jumlah Karyawan"
                                    aria-label="Jumlah Karyawan"
                                    aria-describedby="jumlah"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Jumlah Karyawan</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="kapasitas_produksi">Kapasitas Produksi</label>
                                    <input
                                    type="text"
                                    id="kapasitas_produksi"
                                    name="kapasitas_produksi"
                                    class="form-control"
                                    placeholder="Kapasitas Produksi"
                                    aria-label="Kapasitas Produksi"
                                    aria-describedby="kapasitas_produksi"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Kapasitas Produksi</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="terpasang">Terpasang</label>
                                    <input
                                    type="text"
                                    id="terpasang"
                                    name="terpasang"
                                    class="form-control"
                                    placeholder="Terpasang"
                                    aria-label="Terpasang "
                                    aria-describedby="terpasang"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi </div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="senyatanya">Senyatanya</label>
                                    <input
                                    type="text"
                                    id="senyatanya"
                                    name="senyatanya"
                                    class="form-control"
                                    placeholder="Senyatanya"
                                    aria-label="Senyatanya"
                                    aria-describedby="senyatanya"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="bahan_baku">Bahan Baku Utama</label>
                                    <input
                                    type="text"
                                    id="bahan_baku"
                                    name="bahan_baku"
                                    class="form-control"
                                    placeholder="Bahan Baku Utama"
                                    aria-label="Bahan Baku Utama"
                                    aria-describedby="bahan_baku"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Bahan Baku Utama</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="bahan_penolong">Bahan Penolong</label>
                                    <input
                                    type="text"
                                    id="bahan_penolong"
                                    name="bahan_penolong"
                                    class="form-control"
                                    placeholder="Bahan Penolong"
                                    aria-label="Bahan Penolong"
                                    aria-describedby="bahan_penolong"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Bahan Penolong</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="prosentasi_pemasaran">Prosentase Pemasaran Eksport </label>
                                    <input
                                    type="text"
                                    id="prosentasi_pemasaran"
                                    name="prosentasi_pemasaran"
                                    class="form-control"
                                    placeholder="Prosentase Pemasaran Eksport "
                                    aria-label="Prosentase Pemasaran Eksport "
                                    aria-describedby="prosentasi_pemasaran"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Prosentase Pemasaran Eksport </div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="prosentasi_lokal">Prosentase Pemasaran Domestik/Lokal</label>
                                    <input
                                    type="text"
                                    id="prosentasi_lokal"
                                    name="prosentasi_lokal"
                                    class="form-control"
                                    placeholder="Prosentase Pemasaran Domestik/Lokal"
                                    aria-label="Prosentase Pemasaran Domestik/Lokal"
                                    aria-describedby="prosentasi_lokal"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Prosentase Pemasaran Domestik/Lokal</div>
                                </div>

                                <div class="mb-1">
                                    <label class="d-block form-label" for="dokumen">Dokumen Lingkungan yang dimiliki</label>
                                    <textarea class="form-control" id="dokumen" name="dokumen" rows="2" required></textarea>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="ppa">Pengendalian Pencemaran Air</label>
                                    <input
                                    type="text"
                                    id="ppa"
                                    name="ppa"
                                    class="form-control"
                                    placeholder="Pengendalian Pencemaran Air"
                                    aria-label="Pengendalian Pencemaran Air"
                                    aria-describedby="ppa"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Pengendalian Pencemaran Air</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="ppu">Pengendalian Pencemaran udara</label>
                                    <input
                                    type="text"
                                    id="ppu"
                                    name="ppu"
                                    class="form-control"
                                    placeholder="Pengendalian Pencemaran udara"
                                    aria-label="Pengendalian Pencemaran udara"
                                    aria-describedby="ppu"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Pengendalian Pencemaran udara</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="limbahb3">Pengendalian Limbah B3</label>
                                    <input
                                    type="text"
                                    id="limbahb3"
                                    name="limbahb3"
                                    class="form-control"
                                    placeholder="Pengendalian Limbah B3"
                                    aria-label="Pengendalian Limbah B3"
                                    aria-describedby="limbahb3"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Pengendalian Limbah B3</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="lahan">Pengelolaan Kerusakan LahanPengendalian Limbah B3</label>
                                    <input
                                    type="text"
                                    id="lahan"
                                    name="lahan"
                                    class="form-control"
                                    placeholder="Pengelolaan Kerusakan Lahan"
                                    aria-label="Pengelolaan Kerusakan Lahan"
                                    aria-describedby="lahan"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Pengelolaan Kerusakan Lahan</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="kontak1">Nama Personal Kontak 1</label>
                                    <input
                                    type="text"
                                    id="kontak1"
                                    name="kontak1"
                                    class="form-control"
                                    placeholder="Nama Personal Kontak 1"
                                    aria-label="Nama Personal Kontak 1"
                                    aria-describedby="kontak1"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Nama Personal Kontak 1</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="no_hp1">Nomor HP dan e-mail Personal Kontak 1</label>
                                    <input
                                    type="text"
                                    id="no_hp1"
                                    name="no_hp1"
                                    class="form-control"
                                    placeholder="Nomor HP dan e-mail Personal Kontak 1"
                                    aria-label="Nomor HP dan e-mail Personal Kontak 1"
                                    aria-describedby="no_hp1"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Nomor HP dan e-mail Personal Kontak 1</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="kontak2">Nama Personal Kontak 2</label>
                                    <input
                                    type="text"
                                    id="kontak2"
                                    name="kontak2"
                                    class="form-control"
                                    placeholder="Nama Personal Kontak 2"
                                    aria-label="Nama Personal Kontak 2"
                                    aria-describedby="kontak2"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Nama Personal Kontak 1</div>
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="no_hp2">Nomor HP dan e-mail Personal Kontak 2</label>
                                    <input
                                    type="text"
                                    id="no_hp2"
                                    name="no_hp2"
                                    class="form-control"
                                    placeholder="Nomor HP dan e-mail Personal Kontak 2"
                                    aria-label="Nomor HP dan e-mail Personal Kontak 2"
                                    aria-describedby="no_hp2"
                                    required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Silahkan Isi Nomor HP dan e-mail Personal Kontak 1</div>
                                </div>

                                <div class="mb-1 col-md-12">
                                    <label class="form-label" for="tanggal_dibuat">Tanggal Dibuat</label>
                                    <input type="datetime-local" id="tanggal_dibuat" name="tanggal_dibuat" class="form-control"/>
                                </div>

                              {{-- <div class="mb-1">
                                <label for="berkas" class="form-label">Lampiran Berkas</label>
                                <input class="form-control" type="file" id="berkas" name="berkas" required />
                              </div> --}}

                              <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                              {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                            </form>
                          </div>
                        </div>
                      </div>

                </section>

            </div>
        </div>
    </div>
@endsection
