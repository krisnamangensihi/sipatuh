<!DOCTYPE html>
<head>
    	<title>verifikator</title>
       <link rel="stylesheet" href="{{ public_path('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ public_path('/assets/css/app.min.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: auto; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }

    </style>

</head>

<body>
    <div id=halaman>
        <h3 id=judul>Verifikator</h3>

        <p>yang bertanda tangan di bawah ini :</p>
        
        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $leader->name }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">NIP</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $leader->nip }}</td>
            </tr>
            <tr>
                <td></td> 
            </tr>
           
        </table>
<br>
        <p>menyatakan bahwa sudah diverifikasi</p>

        <div style="width: 50%; text-align: center; float: right;">bogor, {{ $leader->created_at }}</div><br>
         <div style="width: 50%; text-align: center; float: right;">        <img src="{{asset('storage/' . $leader->document) }}"style="width:200px;"></div> <br><br><br><br><br><br><br><br><br>

        <div style="width: 50%; text-align: center; float: right;">Yang bertanda tangan,</div><br>    
        
        <div style="width: 50%; text-align: center; float: right;">{{ $leader->name }}</div>

    </div>
</body>

</html>