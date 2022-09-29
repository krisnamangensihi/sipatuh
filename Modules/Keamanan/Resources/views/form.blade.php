@extends('keamanan::layouts.form')
@section('content')
      <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Form Wizard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Wizard
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
 <!-- Modern Vertical Wizard -->
                <section class="modern-vertical-wizard">
                    <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#account-details-vertical-modern" role="tab" id="account-details-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Kriteria 1</span>
                                        <span class="bs-stepper-subtitle">Kepemimpinan dan Komitmen Manajemen </span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#personal-info-vertical-modern" role="tab" id="personal-info-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Kriteria 2</span>
                                        <span class="bs-stepper-subtitle">.....</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#address-step-vertical-modern" role="tab" id="address-step-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">kriteria 3</span>
                                        <span class="bs-stepper-subtitle">....</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#social-links-vertical-modern" role="tab" id="social-links-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">kriteria 4</span>
                                        <span class="bs-stepper-subtitle">....</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="account-details-vertical-modern" class="content" role="tabpanel" aria-labelledby="account-details-vertical-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Form Input</h5>
                                    <small class="text-muted">Upload Data</small>
                                </div>
                                <div class="row">
                                 <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_keamanan">Menyusun RKAP Bidang Keamanan</label>
                                        <input class="form-control" type="file" id="document_keamanan" name="document_keamanan" required />
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_keamanan">Komitmen Manajemen Keamanan</label>
                                        <input class="form-control" type="file" id="document_keamanan" name="document_keamanan" required />
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_keamanan">Penerapan Sistem Berbasis IT</label>
                                        <input class="form-control" type="file" id="document_keamanan" name="document_keamanan" required />
                                    </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-outline-secondary btn-prev" disabled>
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
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
                </section>
                <!-- /Modern Vertical Wizard -->
           

            </div>
        </div>
    </div>
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
			                	@if(count($errors) > 0)
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
                                        <label class="form-label" for="document_keamanan">Menyusun RKAP Bidang K3</label>
                                        <input class="form-control" type="file" id="document_keamanan" name="document_keamanan" required />
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_keamanan">Menerapan Contractor Safety Management System (CSMS)</label>
                                        <input class="form-control" type="file" id="document_keamanan" name="document_keamanan" required />
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="document_keamanan">Membangun Sistem Manajemen K3 Terintegrasi</label>
                                        <input class="form-control" type="file" id="document_keamanan" name="document_keamanan" required />
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