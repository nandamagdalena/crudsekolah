<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Tutorial</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-5">Tambah Data Siswa</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertCRUD" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Sekolah</label>
                                <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <div>
                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki"> 10
                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki"> 11
                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan"> 12
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Agama</label>
                                <select name="agama" class="form-control" id="agama">
                                    <option value="">-- Pilih Pelajaran --</option>
                                    <option value="Islam">Matematika</option>
                                    <option value="Kristen">Kimia</option>
                                    <option value="Hindu">Fisika</option>
                                    <option value="Buddha">Biologi</option>
                                    <option value="Konghucu">Ekonomi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Guru</label>
                                <input type="text" name="alamat" class="form-control" id="alamat">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
