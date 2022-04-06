<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
@if(session()->get('message') == "tambah")
     <script>swal("Terima kasih!", "Berhasil Ditambahkan!", "success");</script>
@endif
@if(session()->get('message') == "edit")
     <script>swal("Terima kasih!", "Berhasil Diubah!", "success");</script>
@endif
@if(session()->get('message') == "delete")
     <script>swal("Terima kasih!", "Berhasil Dihapus!", "success");</script>
@endif
    <div class="container p-5">
        <h1 align="center"> Data Calon Siswa SMK Wikrama</h1>
        <div class="row mt-3">
            <div class="col-lg-6">
                <a href="{{url('registrasi/create')}}" class="btn btn-primary d-inline">Input Siswa</a>
                <a href="{{url('registrasi/pdf')}}" target="__blank" class="btn btn-secondary d-inline">Cetak PDF</a> 
            </div>
            <div class="col-lg-6">
                <form method="GET" action="{{ url('registrasi') }}" class="form-inline">
                    <div class="input-group"> 
                        <input type="text" class="form-control" id="search_name" name="search_name" placeholder="Cari..." value="{{$search_name}}">
                        <button class="btn btn-info text-white">cari</button>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="form-group col-lg-2 mt-1">
                        <select name="per_page" class="form-select" onchange="this.form.submit()">
                            <option value="5" {{ ($per_page == 5 ? "selected":"") }}>5</option>
                            <option value="10" {{ ($per_page == 10 ? "selected":"") }}>10</option>
                            <option value="15" {{ ($per_page == 15 ? "selected":"") }}>15</option>
                            <option value="20" {{ ($per_page == 20 ? "selected":"") }}>20</option>
                            <option value="50" {{ ($per_page == 50 ? "selected":"") }}>50</option>
                            <option value="100" {{ ($per_page == 100 ? "selected":"") }}>100</option>
                        </select>
                    </div>
            </div>
        </div>
        </form> 
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>No Pendaftaran</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Asal SMP</th>
                    <th>Jurusan</th>
                    <th width="30%">Aksi</th>
                </thead>
                <tbody>
                @foreach($datas as $data)
                    <tr>
                        <td class="fw-bold">{{$loop->iteration}}</td>
                        <td>{{$data->id}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->jk}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->agama}}</td>
                        <td>{{$data->asalsmp}}</td>
                        <td>{{$data->jurusan}}</td>
                        <td>
                            <a href="{{url('registrasi/'.$data->id)}}" class="btn btn-info d-inline">Lihat</a>
                            <a href="{{url('registrasi/'.$data->id. '/edit')}}" class="btn btn-warning d-inline">Edit</a>
                            <a href="{{url('registrasi/pdf/'.$data->id)}}" target="__blank" class="btn btn-secondary d-inline">Cetak PDF</a>
                            <form action="{{url('registrasi/'.$data->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah kamu yakin untuk menghapus data ini?');">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $datas->links() }}
    </div>
</body>
</html>