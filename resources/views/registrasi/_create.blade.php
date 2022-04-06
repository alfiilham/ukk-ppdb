<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Input data Calon Siswa</title>
</head>
<body>
    <div class="container">
    <h1 align="center"> Input Calon Siswa SMK Wikrama</h1>
        <form action="{{url('registrasi')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <labelclass="form-label"> Jenis Kelamin</label>
                <select name="jk" class="form-select" required>
                    <option value="Laki Laki">Laki Laki</option>
                    <option value="Perempuan">perempuan</option>
                </select>
            </div>
            <div class="mb-3" class="form-control">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat"  class="form-control" required>
            </div>
            <div class="mb-3" class="form-control">
                <label class="form-label">Agama</label>
                <select name="agama"class="form-select" required>
                    <option value="islam">islam</option>
                    <option value="kristen">kristen</option>
                </select>
            </div>
            <div class="mb-3" class="form-control">
                <label class="form-label">Asal SMP</label>
                <input type="text" name="asalsmp"  class="form-control" required>
            </div>
            <div class="mb-3" class="form-control">
                <label class="form-label">Jurusan</label>
                <select name="jurusan" class="form-select" required>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Tata Boga">Tata Boga</option>
                    <option value="Tata Busana">Tata Busana</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>