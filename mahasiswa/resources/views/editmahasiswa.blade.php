<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-4">EDIT DATA MAHASISWA</h1>
        <a href="/"><button type="button" class="btn btn-danger mb-2">Kembali</button></a>
        <form action="/editmahasiswa/{{ $mahasiswa->id }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama_mahasiswa" value="{{ $mahasiswa->nama_mahasiswa }}">
              </div>
              <div class="mb-3">
                  <label for="NIM" class="form-label">NIM</label>
                  <input type="text" class="form-control" id="NIM" name="NIM" value="{{ $mahasiswa->NIM }}">
              </div>
              <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal lahir</label>
                  <input type="date" class="form-control" id="nama" name="Tanggal_lahir" value="{{ $mahasiswa->Tanggal_lahir }}">
              </div>
              <div class="mb-3">
                  <label for="Jurusan" class="form-label">Jurusan</label>
                  <input type="text" class="form-control" id="Jurusan" name="Jurusan" value="{{ $mahasiswa->Jurusan }}">
              </div>
              <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="Alamat" value="{{ $mahasiswa->Alamat }}">
              </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
          </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>