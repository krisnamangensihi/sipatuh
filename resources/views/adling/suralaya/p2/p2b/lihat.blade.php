@extends('layouts.lihat')
@section('content')
    {{-- p1b --}}
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @if (session()->has('success'))
                    <div class="alert alert-success col-12" role="alert">
                        <div>
                            <h4 class="alert-heading">
                                {{ session('success') }}
                            </h4>
                        </div>
                    </div>
                @endif
                <section id="nav-filled">
                    <div class="row match-height">

                        <!-- Justified Tabs starts -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">PPA (Domestik)</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link " id="home-tab-justified" data-bs-toggle="tab"
                                                href="#proposal" role="tab" aria-controls="home-just"
                                                aria-selected="true">Detail</a>
                                        </li>

                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content pt-1">
                                        <div class="tab-pane active" id="proposal" role="tabpanel"
                                            aria-labelledby="home-tab-justified">
                                            <!-- proposal -->
                                            <div class="col-xl-12 col-md-8 col-12">
                                                <div class="card invoice-preview-card">


                                                    <!-- Address and Contact starts -->
                                                    <div class="card-body invoice-padding pt-0">
                                                        <div class="row invoice-spacing">
                                                            <div class="col-xl-8 p-0">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="pe-1">Nama Pengirim</td>
                                                                            <td>: {{ $p2b->user->name }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pe-1">Unit</td>
                                                                            <td>: {{ $p2b->divisi }}
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="pe-1">
                                                                                {{ $p2b->keterangan }}</td>
                                                                            <td><span class="fw-bold">:
                                                                                    <a href="{{ asset('storage/' . $p2b->berkas) }}"
                                                                                        target="blank">Document <i
                                                                                            data-feather="file"></i>
                                                                                    </a>
                                                                            </td>
                                                                        </tr>

                                                                        {{-- <tr>
                                                                            <td class="pe-1">Catatan</td>
                                                                            <td>: {{ $p2b->catatan }}
                                                                            </td>
                                                                        </tr> --}}
                                                                    </tbody>
                                                                </table>
                                                                <br>
                                                                <div class="col-sm-9 ">
                                                                    <form action="/sura2b/{{ $p2b->id }}"
                                                                        method="POST">
                                                                        @method('put')
                                                                        @csrf <div class="mb-2">
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
                                                                                <option value="disetujui">Diterima</option>
                                                                                <option value="direvisi">Revisi</option>
                                                                                <option value="ditolak">Ditolak</option>
                                                                            </select>
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="btn btn-gradient-success btn-sm">Submit</button>
                                                                        <a href="/sura2b"
                                                                            class="btn btn-outline-dark btn-sm">Back</a>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
