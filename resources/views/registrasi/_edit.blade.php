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
        <form action="{{url('registrasi/'.$data->id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jk"  value="<?php echo $data['jk'] ?>" class="form-select" required>
                    <option value="Laki Laki" <?php if($data['jk'] == "Laki Laki"){echo "selected"; }  ?>>Laki Laki</option>
                    <option value="Perempuan" <?php if($data['jk'] == "Perempuan"){echo "selected"; }  ?>>perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat"  value="<?php echo $data['alamat'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Agama</label>
                <select name="agama"  value="<?php echo $data['agama'] ?>" class="form-select" required>
                    <option value="islam" <?php if($data['agama'] == "islam"){echo "selected"; }  ?>>islam</option>
                    <option value="kristen" <?php if($data['agama'] == "kristen"){echo "selected"; }  ?>>kristen</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Asal SMP</label>
                <input type="text" name="asalsmp"  value="<?php echo $data['asalsmp'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <select name="jurusan"  value="<?php echo $data['jurusan'] ?>" class="form-select" required>
                    <option value="Rekayasa Perangkat Lunak" <?php if($data['jurusan'] == "Rekayasa Perangkat Lunak"){echo "selected"; }  ?>>Rekayasa Perangkat Lunak</option>
                    <option value="Tata Boga" <?php if($data['jurusan'] == "Tata Boga"){echo "selected"; }  ?>>Tata Boga</option>
                    <option value="Tata Busana" <?php if($data['jurusan'] == "Tata Busana"){echo "selected"; }  ?>>Tata Busana</option>
                    <option value="Multimedia" <?php if($data['jurusan'] == "Multimedia"){echo "selected"; }  ?>>Multimedia</option>
                </select>
            </div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>