<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>CRUD Laravel</title>
</head>
<body>
    <h1 class="text-center mb-4">Data Siswa</h1>

    <div class="container">
        <a href="/tambahsiswa" type="button" class="btn btn-success mb-3">Tambah +</a>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nama Sekolah</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Siswa</th>
                        <th scope="col">Pelajaran</th>
                        <th scope="col">Guru</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $row)
                        <tr>
                            <th scope="row" class="text-center">{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->kelas }}</td>
                            <td class="text-center">
                                <img src="{{ asset('storage/' . $row->foto) }}" alt="Foto" width="50" height="50">
                            </td>
                            <td>{{ $row->pelajaran }}</td>
                            <td>{{ $row->Guru }}</td>
                            <td class="text-center">
                                <a href="/tampilkandata/{{ $row->id }}" type="button" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/delete/{{ $row->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
