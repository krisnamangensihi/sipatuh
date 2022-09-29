<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keluar</title>
    <link rel="stylesheet" href="{{ public_path('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ public_path('/assets/css/app.min.css') }}">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <style>
        .kop {
            font-size: 30px
        }

        .logo {
            position: relative;
            margin-top: -30px;
        }

        .logo1 {
            position: relative;
            margin-top: -30px;
            margin-left: 400px;
        }

        hr {
            margin: 0;
        }

        hr.hr-2 {
            margin-top: 3px;
            border: black 1px solid;
        }
    </style>

    @php
        use Carbon\Carbon;
    @endphp
</head>

<body>
    <img class="logo" width="150px" src="{{ public_path('/app-assets/images/pages/patuh123.png') }}" alt="">
    <img class="logo1" width="150px" src="{{ public_path('/app-assets/images/pages/pln1.png') }}" alt="">
    <div>
        <div>
            {{-- @foreach ($leadership as $le) --}}

            <p class="text-center m-0 text-uppercase" style="font-size: 18px"><strong>LAPORAN KEPATUHAN
                    KEAMANAN</strong></p><br>
            <p class="text-center m-0" style="font-size: 18px"><strong>Maturity Level Keamanan</strong></p>
            {{-- <p class="text-center m-0 text-uppercase" style="font-size: 18px"></p> --}}
            <hr class="hr-1">
            <hr class="hr-2">
            {{-- @endforeach --}}
        </div>
        <div class="mt-3">
            {{-- <div class="card-body border-bottom">
            </div> --}}
            <h4 class="col-12"><strong>1.Kepemimpinan dan Komitmen Manajemen</strong></h4>
            <table class="table table-bordered p-2">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">No</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Sub Kriteria</th>
                        <th class="text-center">Level</th>
                        {{-- <th class="text-center">Document</th> --}}
                        <th class="text-center">catatan</th>
                        {{-- <th class="text-center">status</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kepemimpinan as $item)
                        <tr>
                            <td></td>
                            <td class="text-center">{{ $item->no_kriteria }}</td>
                            <td class="text-center">{{ $item->divisi }}</td>
                            <td class="text-justify">{{ $item->sub_kriteria }}</td>
                            <td class="text-center">{{ $item->level }}</td>
                            {{-- <td class="text-center"> 
                                                 <a href="/kepemimpinan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                                        </td> --}}

                            {{-- <td class="text-center">{{ $item->catatan }}</td> --}}
                            <td>
                                @if ($item->status == 'diajukan')
                                    <a class="btn-flat-{info}">diajukan</a>
                                @elseif ($item->status == 'ditinjau')
                                    <a class="btn-flat-{primary}">ditinjau</a>
                                @elseif ($item->status == 'revisi')
                                    <a class="btn-flat-{warning}">revisi</a>
                                @elseif ($item->status == 'disetujui')
                                    <a class="btn-flat-{succes}">disetujui</a>
                                @elseif ($item->status == 'ditolak')
                                    <a class="btn-flat-{danger}">ditolak</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{-- <div class="card-body border-bottom">
            </div> --}}
            <h4 class="col-12"><strong>2.Sosialisasi, Kordinasi, Kerjasama Lintas Sektoral Dan Kelembagaan
                    Negara</strong>
            </h4>
            <table class="table table-bordered p-2">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">No</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Sub Kriteria</th>
                        <th class="text-center">Level</th>
                        {{-- <th class="text-center">Document</th> --}}
                        {{-- <th class="text-center">Catatan</th> --}}
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sosial as $item)
                        <tr>
                            <td></td>
                            <td class="text-center">{{ $item->no_kriteria }}</td>
                            <td class="text-center">{{ $item->divisi }}</td>
                            <td class="text-justify">{{ $item->sub_kriteria }}</td>
                            <td class="text-center">{{ $item->level }}</td>
                            {{-- <td class="text-center">
                                <a href="/kempemimpinan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                            </td> --}}

                            {{-- <td class="text-center">{{ $item->catatan }}</td> --}}
                            <td class="text-center">
                                @if ($item->status == 'diajukan')
                                    <a class="btn-flat-{info}">diajukan</a>
                                @elseif ($item->status == 'ditinjau')
                                    <a class="btn-flat-{primary}">ditinjau</a>
                                @elseif ($item->status == 'revisi')
                                    <a class="btn-flat-{warning}">revisi</a>
                                @elseif ($item->status == 'disetujui')
                                    <a class="btn-flat-{succes}">disetujui</a>
                                @elseif ($item->status == 'ditolak')
                                    <a class="btn-flat-{danger}">ditolak</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{-- <div class="card-body border-bottom">
        </div> --}}
            <h4 class="col-12"><strong>3.Audit dan Assessment Pengamanan</strong></h4>
            <table class="table table-bordered p-2">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">No</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Sub Kriteria</th>
                        <th class="text-center">Level</th>
                        {{-- <th class="text-center">Document</th> --}}
                        {{-- <th class="text-center">Catatan</th> --}}
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengamanan as $item)
                        <tr>
                            <td></td>
                            <td class="text-center">{{ $item->no_kriteria }}</td>
                            <td class="text-center">{{ $item->divisi }}</td>
                            <td class="text-justify">{{ $item->sub_kriteria }}</td>
                            <td class="text-center">{{ $item->level }}</td>
                            {{-- <td class="text-center">
                            <a href="/kempemimpinan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                        </td> --}}

                            {{-- <td class="text-center">{{ $item->catatan }}</td> --}}
                            <td class="text-center">
                                @if ($item->status == 'diajukan')
                                    <a class="btn-flat-{info}">diajukan</a>
                                @elseif ($item->status == 'ditinjau')
                                    <a class="btn-flat-{primary}">ditinjau</a>
                                @elseif ($item->status == 'revisi')
                                    <a class="btn-flat-{warning}">revisi</a>
                                @elseif ($item->status == 'disetujui')
                                    <a class="btn-flat-{succes}">disetujui</a>
                                @elseif ($item->status == 'ditolak')
                                    <a class="btn-flat-{danger}">ditolak</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{-- <div class="card-body border-bottom">
        </div> --}}
            <h4 class="col-12"><strong>4.Identifikasi Tingkat Kerawanan Keamanan</strong></h4>
            <table class="table table-bordered p-2">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">No</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Sub Kriteria</th>
                        <th class="text-center">Level</th>
                        {{-- <th class="text-center">Document</th> --}}
                        {{-- <th class="text-center">Catatan</th> --}}
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kerawanan as $item)
                        <tr>
                            <td></td>
                            <td class="text-center">{{ $item->no_kriteria }}</td>
                            <td class="text-center">{{ $item->divisi }}</td>
                            <td class="text-justify">{{ $item->sub_kriteria }}</td>
                            <td class="text-center">{{ $item->level }}</td>
                            {{-- <td class="text-center">
                            <a href="/kempemimpinan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                        </td> --}}

                            {{-- <td class="text-center">{{ $item->catatan }}</td> --}}
                            <td class="text-center">
                                @if ($item->status == 'diajukan')
                                    <a class="btn-flat-{info}">diajukan</a>
                                @elseif ($item->status == 'ditinjau')
                                    <a class="btn-flat-{primary}">ditinjau</a>
                                @elseif ($item->status == 'revisi')
                                    <a class="btn-flat-{warning}">revisi</a>
                                @elseif ($item->status == 'disetujui')
                                    <a class="btn-flat-{succes}">disetujui</a>
                                @elseif ($item->status == 'ditolak')
                                    <a class="btn-flat-{danger}">ditolak</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{-- <div class="card-body border-bottom">
        </div> --}}
            <h4 class="col-12"><strong>5.Kompetensi Dan Pelatihan</strong></h4>
            <table class="table table-bordered p-2">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">No</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Sub Kriteria</th>
                        <th class="text-center">Level</th>
                        {{-- <th class="text-center">Document</th> --}}
                        {{-- <th class="text-center">Catatan</th> --}}
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelatihan as $item)
                        <tr>
                            <td></td>
                            <td class="text-center">{{ $item->no_kriteria }}</td>
                            <td class="text-center">{{ $item->divisi }}</td>
                            <td class="text-justify">{{ $item->sub_kriteria }}</td>
                            <td class="text-center">{{ $item->level }}</td>
                            {{-- <td class="text-center">
                            <a href="/kempemimpinan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                        </td> --}}

                            {{-- <td class="text-center">{{ $item->catatan }}</td> --}}
                            <td class="text-center">
                                @if ($item->status == 'diajukan')
                                    <a class="btn-flat-{info}">diajukan</a>
                                @elseif ($item->status == 'ditinjau')
                                    <a class="btn-flat-{primary}">ditinjau</a>
                                @elseif ($item->status == 'revisi')
                                    <a class="btn-flat-{warning}">revisi</a>
                                @elseif ($item->status == 'disetujui')
                                    <a class="btn-flat-{succes}">disetujui</a>
                                @elseif ($item->status == 'ditolak')
                                    <a class="btn-flat-{danger}">ditolak</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{-- <div class="card-body border-bottom">
        </div> --}}
            <h4 class="col-12"><strong>6.Pelaporan</strong></h4>
            <table class="table table-bordered p-2">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">No</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Sub Kriteria</th>
                        <th class="text-center">Level</th>
                        {{-- <th class="text-center">Document</th> --}}
                        {{-- <th class="text-center">Catatan</th> --}}
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lapor as $item)
                        <tr>
                            <td></td>
                            <td class="text-center">{{ $item->no_kriteria }}</td>
                            <td class="text-center">{{ $item->divisi }}</td>
                            <td class="text-justify">{{ $item->sub_kriteria }}</td>
                            <td class="text-center">{{ $item->level }}</td>
                            {{-- <td class="text-center">
                            <a href="/kempemimpinan/{{ $item->id }}"class="btn-flat-{primary}">Document</a>
                        </td> --}}

                            {{-- <td class="text-center">{{ $item->catatan }}</td> --}}
                            <td class="text-center">
                                @if ($item->status == 'diajukan')
                                    <a class="btn-flat-{info}">diajukan</a>
                                @elseif ($item->status == 'ditinjau')
                                    <a class="btn-flat-{primary}">ditinjau</a>
                                @elseif ($item->status == 'revisi')
                                    <a class="btn-flat-{warning}">revisi</a>
                                @elseif ($item->status == 'disetujui')
                                    <a class="btn-flat-{succes}">disetujui</a>
                                @elseif ($item->status == 'ditolak')
                                    <a class="btn-flat-{danger}">ditolak</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
