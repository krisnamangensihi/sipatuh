<html>

<head>
    <title>{{ $kepim->divisi }}</title>
    <link rel="stylesheet" href="{{ public_path('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ public_path('/assets/css/app.min.css') }}">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        #judul {
            text-align: center;

        }

        #judul2 {
            text-align: center;
        }

        #halaman {
            width: auto;
            height: auto;
            border: 1px solid;
            padding-top: 5px;
            padding-left: 30px;
            padding-right: 30px;
        }

        #border {
            width: auto;
            height: auto;
            border: 1px solid;
            padding-top: 5px;
            padding-left: 5px;
            padding-bottom: 5px;
        }

        table tr td,
        table tr th {
            font-size: 78%;
        }

        table td .judul {
            margin-top: 50%;

        }

        hr {
            margin: 0;

        }

        .logo {
            margin-top: -10%;
            margin-bottom: -50%;
        }

        .logo1 {
            margin-left: 83%;
            margin-top: -5%;
            /* margin-bottom: -30% */
        }

        .barcode {
            margin-left: 82%;
            margin-top: -20%;
            margin-bottom: 5%;
        }

        hr.hr-2 {
            margin-top: 3px;
            margin-bottom: 7%;
            border: black 1px solid;
        }

        hr.hr-3 {
            margin-top: 3px;
            margin-bottom: 76%;
            border: white;
        }

        hr.hr-4 {
            margin-top: 3px;
            margin-bottom: 10px;
            border: white 0px;
        }
    </style>
    @php
        $date = date('d-m-Y H:i.s');
        $dot = date('ymd');
    @endphp

    <div>
        <img class="logo" src="{{ public_path('/app-assets/images/pages/patuh123.png') }}" width="23%">
        <img class="logo1" src="{{ public_path('/app-assets/images/pages/pln1.png') }}" width="18%">
    </div>

    <table width="100%">

        <tr>

            <td class="judul" width="50" align="center">
                <h5>LAPORAN KEPATUHAN KEAMANAN</h5>
                <h6>PT.PLN (Persero) {{ $kepim->divisi }}</h6>
            </td>

        </tr>
    </table>
    <hr class="hr-2">
    {{-- tanda terima elektroini --}}
    <div id=halaman>
        <h5 id=judul2>TANDA TERIMA ELEKTRONIK</h5>
        <h5 id=judul2>(KEAMANAN)</h5>
    </div>
    <div id=border>

        <table>
            <tr>
                <td style="width: 30%;"><strong>ID TTE</strong></td>
                <td style="width: 5%;">:</td>
                <td style="width: 79%;">{{ $dot }}/{{ $kepim->user->unit }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><strong>PERIODE TTE</strong></td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Triwulan {{ $kepim->triwulan }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;"><strong>WAKTU CETAK TTE</strong></td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $date }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><strong>Nama</strong></td>
                <td style="width: 5%;"> :</td>
                <td style="width: 65%;"> {{ $kepim->user->name }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><strong>NAMA UNIT</strong></td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">PT.PLN (Persero) {{ $kepim->divisi }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;"><strong>ID UNIT</strong></td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $kepim->user->unit }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><strong>Alamat</strong></td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $kepim->user->alamat }}</td>
            </tr>
        </table>
        <div class="barcode">
            <p></p>
            <img style="text-align: center"src="data:image/png;base64, {!! $qrcode !!}">
            <p></p>
        </div>
    </div>
    <div id=border>
        <button type="button" class="btn btn-primary btn-sm btn-block" style="width: 97%">
            <strong>LAPORAN MATURITY LEVEL KEAMANAN</strong></button>
        <button type="button" class="btn btn-success btn-sm btn-block" style="width: 97%">
            <strong>SUDAH LAPOR</strong></button>
    </div>


    <hr class="hr-3">
    <div>
        <img class="logo" src="{{ public_path('/app-assets/images/pages/patuh123.png') }}" width="23%">
        <img class="logo1" src="{{ public_path('/app-assets/images/pages/pln1.png') }}" width="18%">
    </div>
    <table width="100%">

        <tr>
            {{-- <td width="30" align="center"><img src="{{ public_path('/app-assets/images/pages/patuh123.png') }}"
                    width="100%"></td> --}}
            <td width="50" align="center">
                <h5>LAPORAN KEPATUHAN KEAMANAN</h5>
                <h6>PT.PLN (Persero) {{ $kepim->divisi }}</h6>
            </td>
            {{-- <td width="25" align="center"><img src="{{ public_path('/app-assets/images/pages/pln1.png') }}"
                    width="100%"></td> --}}
        </tr>
    </table>
    <hr class="hr-4">
    <h6 align="center">MATLEV KEAMANAN </h6>
    <table class="table table-bordered border-primary">
        <thead>
            <tr style="text-align: center;">
                <th>No</th>
                <th>Kriteria</th>
                <th>Sub Kriteria</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kepemimpinan as $ang)
                <tr>
                    <td class="text-center">1</td>
                    <td>Kepemimpinan & Management Commitment</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="table-active">
                <th class="text-center"> Score </th>
                <td colspan="2"></td>

                <th class="text-center"> {{ round($rekapkepemimpinan, 2) }} </th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($sosial as $ang)
                <tr>
                    <td class="text-center">2</td>
                    <td>Sosialisasi, Kordinasi, Kerjasama Lintas Sektoral Dan Kelembagaan Negara</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="table-active">
                <th class="text-center"> Score </th>
                <td colspan="2"></td>

                <th class="text-center"> {{ round($rekapsosial, 2) }} </th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($pengamanan as $ang)
                <tr>
                    <td class="text-center">3</td>
                    <td>Audit dan Assessment Pengamanan</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="table-active">
                <th class="text-center"> Score </th>
                <td colspan="2"></td>

                <th class="text-center"> {{ round($rekappengamanan, 2) }} </th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($kerawanan as $ang)
                <tr>
                    <td class="text-center">4</td>
                    <td>Identifikasi Tingkat Kerawanan Keamanan</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="table-active">
                <th class="text-center"> Score </th>
                <td colspan="2"></td>

                <th class="text-center"> {{ round($rekapkerawanan, 2) }} </th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($pelatihan as $ang)
                <tr>
                    <td class="text-center">5</td>
                    <td>Kompetensi Dan Pelatihan </td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="table-active">
                <th class="text-center"> Score </th>
                <td colspan="2"></td>

                <th class="text-center"> {{ round($rekappelatihan, 2) }} </th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($lapor as $ang)
                <tr>
                    <td class="text-center">6</td>
                    <td>Pelaporan</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="table-active">
                <th class="text-center"> Score </th>
                <td colspan="2"></td>

                <th class="text-center"> {{ round($rekaplapor, 2) }} </th>
            </tr>
        </tfoot>
        <tfoot>
            <tr class="table-succes">
                <th class="text-center"> Total Score </th>
                <td colspan="2"></td>

                <th class="text-center"> {{ round($hitung, 2) }} </th>
            </tr>
        </tfoot>
    </table>


</body>

</html>
