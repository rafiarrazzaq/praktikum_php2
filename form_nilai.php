<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <style>
    body {
      height: 100%;
    }

    .container {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5">
        <h2 class="mt-5 text-center primary">Aplikasi Daftar Nilai Siswa</h2>
      </div>
      <div class="col-md-12 d-flex justify-content-center">
        <div class="card mb-3 border-primary w-75">
          <div class="card-header text-white bg-success">Form Input Nilai</div>
          <div class="card-body">
            <form action="nilai_siswa.php" method="POST">
              <div class="form-group row">
                <label class="col-4 col-form-label" for="name">Nama Lengkap</label>
                <div class="col-8">
                  <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Mahasiswa">
                </div>
              </div>
              <div class="form-group row pt-4 pb-2">
                <label for="matkul" class="col-4 col-form-label ">Mata Kuliah</label>
                <div class="col-8">
                  <select id="matkul" name="matkul" class="form-select form-select-sm">
                    <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                    <option value="Basis Data">Basis Data</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                  </select>
                </div>
              </div>
              <div class="form-group row pt-2 pb-4">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                  <input id="uts" name="uts" placeholder="Nilai Ujian Tengah Semester" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row  pb-4">
                <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                  <input id="uas" name="uas" placeholder="Nilai Ujian Akhir Semester" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row  pb-4">
                <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
                <div class="col-8">
                  <input id="tugas" name="tugas" placeholder="Nilai Tugas / Pratikum" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                  <button name="reset" type="reset" class="btn btn-danger">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>