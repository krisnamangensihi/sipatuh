@extends('tablelay.table')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="nav-filled">
                    <div class="row match-height">

                        <!-- Justified Tabs starts -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Document</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link " id="home-tab-justified" data-bs-toggle="tab"
                                                href="#proposal" role="tab" aria-controls="home-just"
                                                aria-selected="true">Document</a>
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
                                                            <form action="/bogorkeamanan/{{ $kepemimpinan->id }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @method('put')
                                                                @csrf
                                                                <div class="mb-1 col-md-12">
                                                                    <label class="form-label" for="inputfile">Silahkan
                                                                        Masukan File</label>
                                                                    <input class="form-control" type="file"
                                                                        id="inputfile" name="document" />
                                                                </div>


                                                                <div class="col-12 text-center mt-2 pt-50">
                                                                    <input type="hidden" value="{{ Auth::user()->name }}"
                                                                        name="name">
                                                                    <input type="hidden" value="{{ Auth::user()->unit }}"
                                                                        name="nip">

                                                                    <button type="hidden" value="tw2" name="verifikasi"
                                                                        class="btn btn-success" id="type-verifikasi"
                                                                        onclick="return confirm('Apakah anda yakin ingin memverifikasi?')">Verifikasi</button>

                                                                    <button type="reset" class="btn btn-outline-secondary"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        Discard
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endsection
