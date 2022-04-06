<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PDF Download</title>
</head>
<body>
<h1 align="center"> Data Calon Siswa SMK Wikrama</h1>
    <table class="table table-striped table-hovertable-responsive">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Asal SMP</th>
            <th>Jurusan</th>
        </thead>
        <tbody>
        @foreach($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->jk}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->agama}}</td>
                <td>{{$data->asalsmp}}</td>
                <td>{{$data->jurusan}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
<script>window.print()</script>
</html>