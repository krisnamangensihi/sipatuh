{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.app')
@section('tittle')
    SIPATUH
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
                            <h2 class="content-header-title float-start mb-0"><b>Dashboard</b></h2>
                            <div class="breadcrumb-wrapper">
                                {{-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a>Kinerja</a>
                                    </li>
                                </ol> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Knowledge base -->
                <section id="knowledge-base-content">
                    <div class="row kb-search-content-info match-height">
                        @can('is_user')
                            <!-- sales card -->
                            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                                <div class="card">
                                    <a href="{{ route('k3') }}">
                                        <img src="../../../app-assets/images/illustration/sales.svg" class="card-img-top"
                                            alt="knowledge-base-image" />

                                        <div class="card-body text-center">
                                            <h4>K3</h4>
                                            <p class="text-body mt-1 mb-0">
                                                Memberikan Laporan Tentang Keselamatan dan Kesehatan Kerja
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- marketing -->
                            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                                <div class="card">
                                    <a href="{{ route('lingkungan') }}">
                                        <img src="../../../app-assets/images/illustration/marketing.svg" class="card-img-top"
                                            alt="knowledge-base-image" />
                                        <div class="card-body text-center">
                                            <h4>Lingkungan</h4>
                                            <p class="text-body mt-1 mb-0">
                                                Memberikan Laporan Tentang Lingkungan
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- api -->
                            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                                <div class="card">
                                    <a href="{{ route('keamanan') }}">
                                        <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top"
                                            alt="knowledge-base-image" />
                                        <div class="card-body text-center">
                                            <h4>Keamanan</h4>
                                            <p class="text-body mt-1 mb-0">Memberikan Laporan Maturity Keamanan</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endif
                            @can('is_admin')
                                <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                                    <div class="card">
                                        <a href="{{ route('user') }}">
                                            <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top"
                                                alt="knowledge-base-image" />
                                            <div class="card-body text-center">
                                                <h4>Buat Akun User</h4>
                                                <p class="text-body mt-1 mb-0">Membuat Akun User</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                                    <div class="card">
                                        <a href="/adling">
                                            <img src="../../../app-assets/images/illustration/verify-email-illustration.svg"
                                                class="card-img-top" alt="knowledge-base-image" style="max-height: 65%" />
                                            <div class="card-body text-center">
                                                <h4>Lingkungan</h4>
                                                <p class="text-body mt-1 mb-0">Memeriksa Laporan Lingkungan</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                                    <div class="card">
                                        <a href="/dashboardkeamanan">
                                            <img src="../../../app-assets/images/illustration/verify-email-illustration.svg"
                                                class="card-img-top" alt="knowledge-base-image" />
                                            <div class="card-body text-center">
                                                <h4>Keamanan</h4>
                                                <p class="text-body mt-1 mb-0">Memeriksa Laporan Kinerja Keamanan</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                                    <div class="card">
                                        <a href="/dashboardk3">
                                            <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top"
                                                alt="knowledge-base-image" />
                                            <div class="card-body text-center">
                                                <h4>K3</h4>
                                                <p class="text-body mt-1 mb-0">memriksa laporan kinerja K3</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endcan

                    </section>
                    <!-- Knowledge base ends -->

                </div>
            </div>
        </div>
    @endsection
