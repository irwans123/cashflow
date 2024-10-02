<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="alert alert-primary mt-3" role="alert">
            Selamat datang ganteng
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Data Siswa</h4>
                <a href="/siswa/tambah" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <div class="card-body">
                <form class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari berdasarkan nama" name="cari" value="{{Request()->cari}}">
                    <button class="btn btn-outline-secondary" type="submit">Button</button>
                </form>
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($siswas as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->nama }}</td>
                            @if ($siswa->umur <= 17)
                                <td>{{ $siswa->umur }} remaja</td>
                            @else
                                <td>{{ $siswa->umur }} dewasa </td>
                            @endif

                            <td>
                                <a href="/siswa/{{ $siswa->id }}" class="btn btn-info btn-sm">detail</a>
                                <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning btn-sm">edit</a>
                                <a href="/siswa/{{ $siswa->id }}/hapus" class="btn btn-danger btn-sm">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
