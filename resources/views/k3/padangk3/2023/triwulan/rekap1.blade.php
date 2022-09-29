<html>
<head>
	<title>Cetak Data Surat Keluar HMJ TI</title>
       <link rel="stylesheet" href="{{ public_path('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ public_path('/assets/css/app.min.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
      #judul{
            text-align:center;
        }
		#judul2{
            text-align:center;
        }
        #halaman{
            width: auto; 
            height: auto; 
            border: 1px solid; 
            padding-top: 5px; 
            padding-left: 30px; 
            padding-right: 30px; 
        }
         #border{
            width: auto; 
            height: auto; 
            border: 1px solid; 
            padding-top: 5px;
             padding-left: 5px; 
            padding-bottom: 5px;
        }
		table tr td,
		table tr th{
			font-size: 74%;
		}
    
        hr {
            margin: 0;
         
        }

       hr.hr-2 {
            margin-top: 3px;
            margin-bottom: 20px;
            border: black 1px solid;
        }
         hr.hr-3 {
             margin-top: 3px;
            margin-bottom: 400px;
            border: rgba(255, 255, 255, 0) 0px ;
         }
         hr.hr-4 {
             margin-top: 3px;
            margin-bottom: 10px;
            border: white 0px ;
         }
	</style>
    @php
        $ldate = date('d-m-Y H:i:s');
        $dot = date('ymd');
    @endphp
	<table width="100%">
            
        <tr>
            <td width="25" align="center"><img src="{{ public_path('/app-assets/images/pages/logsip.png') }}" width="100%"></td>
            <td width="50" align="center"><h5>LAPORAN KEPATUHAN K3</h5><br><h6> {{ $leader->divisi }}</h6></td>
            <td width="25" align="center"><img src="{{ public_path('/app-assets/images/pages/newlog.png') }}" width="100%"></td>
        </tr>
    </table>
      <hr class="hr-2">
      {{-- tanda terima elektroini --}}
      <div id=halaman>
          <h5 id=judul2>TANDA TERIMA ELEKTRONIK</h5>
          <h5 id=judul2><(K3)</h5>
          
          
        </div>
        <div id=border>
       
   <table>
       <tr>
                <td style="width: 30%;"><b>ID TTE</b></td>
                <td style="width: 5%;">:</td>
                <td style="width: 79%;">{{ $dot }}{{ $leader->user->unit }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><b>PERIODE TTE</b></td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $leader->tgl_pelaporan }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;"><b>WAKTU CETAK TTE</b></</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $ldate }}</td>
            </tr>
        
        </table>
        
        
    </div>
        <div id=border>
       
   <table>
       <tr>
                <td style="width: 30%;"><b>NAMA</b></td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $leader->user->name }}</td>
            </tr>
       <tr>
                <td style="width: 30%;"><b>NAMA UNIT</b></td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $leader->divisi }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><b>ID UNIT</b></td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $leader->user->unit }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;"><b>ALAMAT</b></td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $leader->user->alamat }}</td>
            </tr>
            
        </table>
        
        
    </div>
        <div id=border>
  <button type="button" class="btn btn-primary btn-sm btn-block" style="width: 97%">
    <b>LAPORAN MATURITY LEVEL K3</b></button>
  <button type="button" class="btn btn-success   btn-sm btn-block" style="width: 97%">
    <b>SUDAH LAPOR</b></button>
    </div>
 <div class="visible-print text-center">
    <p>disetujui oleh :</p>
    <img src="data:image/png;base64, {!! $qrcode !!}">
    <p>Yanuar Rizki</p>
</div>
     <hr class="hr-3">
    {{-- table rekap --}}
    <table width="100%">
            
        <tr>
            <td width="25" align="center"><img src="{{ public_path('/app-assets/images/pages/logsip.png') }}" width="100%"></td>
            <td width="50" align="center"><h5>LAPORAN KEPATUHAN K3</h5><br><h6> {{ $leader->divisi }}</h6></td>
            <td width="25" align="center"><img src="{{ public_path('/app-assets/images/pages/newlog.png') }}" width="100%"></td>
        </tr>
    </table>
        <hr class="hr-4">
    <h6 align="center">MATLEV K3  </h6>
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
                  @foreach($leadership as $ang)
                  <tr>
                      <td class="text-center">1</td>
                      <td>Leadership & Management Commitment</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                    </tr>
                    @endforeach
              </tbody>
                <tfoot>
                                        <tr class="table-active">
                                            <th class="text-center"> Score </th>
                                            <td colspan="2"></td>
                                            
                                            <th class="text-center">  {{ round($rekapleadership,2)}} </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                  @foreach($audit as $ang)
                  <tr>
                      <td class="text-center">2</td>
                      <td>Audit, Assessment and Inspection</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                    </tr>
                    @endforeach
              </tbody>
                <tfoot>
                                        <tr class="table-active">
                                            <th class="text-center"> Score </th>
                                            <td colspan="2"></td>
                                            
                                            <th class="text-center">  {{  round($rekapaudit,2) }} </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                  @foreach($penerapan as $ang)
                  <tr>
                      <td class="text-center">3</td>
                      <td>penerapan</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                    </tr>
                    @endforeach
              </tbody>
                <tfoot>
                                        <tr class="table-active">
                                            <th class="text-center"> Score </th>
                                            <td colspan="2"></td>
                                            
                                            <th class="text-center">  {{ round($rekappenerapan,2)}} </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                  @foreach($safeti as $ang)
                  <tr>
                      <td class="text-center">4</td>
                      <td>safeti</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                    </tr>
                    @endforeach
              </tbody>
                <tfoot>
                                        <tr class="table-active">
                                            <th class="text-center"> Score </th>
                                            <td colspan="2"></td>
                                            
                                            <th class="text-center">  {{ round($rekapsafeti,2)}} </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                  @foreach($comunication as $ang)
                  <tr>
                      <td class="text-center">5</td>
                      <td>comunication</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                    </tr>
                    @endforeach
              </tbody>
                <tfoot>
                                        <tr class="table-active">
                                            <th class="text-center"> Score </th>
                                            <td colspan="2"></td>
                                            
                                            <th class="text-center">  {{ round($rekapcomunication,2)}} </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                  @foreach($reporting as $ang)
                  <tr>
                      <td class="text-center">6</td>
                      <td>reporting</td>
                    <td>{{ $ang->no_kriteria }}. {{ $ang->sub_kriteria }}</td>
                    <td class="text-center">{{ $ang->level }}</td>
                    </tr>
                    @endforeach
              </tbody>
                <tfoot>
                                        <tr class="table-active">
                                            <th class="text-center"> Score </th>
                                            <td colspan="2"></td>
                                            
                                            <th class="text-center">  {{ round($rekapreporting,2)}} </th>
                                        </tr>
                                    </tfoot>
                <tfoot>
                                        <tr class="table-succes">
                                            <th class="text-center"> Total Score </th>
                                            <td colspan="2"></td>
                                            
                                            <th class="text-center">  {{ round($hitung,2)}} </th>
                                        </tr>
                                    </tfoot>
	</table>
   

</body>
</html>