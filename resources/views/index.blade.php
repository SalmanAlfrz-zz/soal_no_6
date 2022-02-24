<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal No 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
    <div class="row">
        <h1>Program Menghitung Penghasilan Bulanan</h1>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Gaji</th>
                <th>Level Jabatan</th>
                <th>Region</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $row)
            @php
            if($row->gaji>15000000)
            {
                $tunjangan = $row->gaji*0.1;
            }elseif($row->gaji<=15000000 && $row->gaji>10000000)
            {
                $tunjangan = $row->gaji*0.12;
            }
            else
            {
                $tunjangan = $row->gaji*0.15;
            }
            $gaji = $row->gaji + $tunjangan;
            if($row->region == 'Jakarta')
            {
                $gaji = $gaji-$gaji*0.025;
            }
            elseif($row->region == 'Bandung')
            {
                $gaji = $gaji-$gaji*0.02;
            }
            else
            {
                $gaji = $gaji-$gaji*0.018;
            }
            if($row->jabatan == 'Manager')
            {
                $gaji = $gaji + 25000;
            }
            elseif($row->jabatan == 'Ass. Manager')
            {
                $gaji = $gaji + 175000;
            }
            elseif($row->jabatan == 'Senior Officer')
            {
                $gaji = $gaji + 150000;
            }
            elseif($row->jabatan == 'Middle Officer')
            {
                $gaji = $gaji + 125000;
            }
            elseif($row->jabatan == 'Junior Officer')
            {
                $gaji = $gaji + 100000;
            }
            @endphp
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->nama}}</td>
                <td>Rp.{{$gaji}}</td>
                <td>{{$row->jabatan}}</td>
                <td>{{$row->region}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>