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
    <table class="table table table-bordered" align="center">
        <tbody>
            <tr>
                <th>No Pendaftaran</th>
                <td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{$data->nama}}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{$data->jk}}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{$data->alamat}}</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>{{$data->agama}}</td>
            </tr>
            <tr>
                <th>Asal SMP</th>
                <td>{{$data->asalsmp}}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{$data->jurusan}}</td>
            </tr>
            </tr>
        </tbody>
    </table>
</body>
<script>window.print()</script>
</html>