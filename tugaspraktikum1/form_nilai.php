<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Form Nilai Mahasiswa / Mahasiswi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<form class="form-horizontal" method="GET" action="array_siswa.php">
<fieldset>

<!-- Form Name -->
<legend>Form Nilai Siswa STT NF</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nama Mahasiswa</label>  
  <div class="col-md-4">
  <input name="nama" type="text" placeholder="Mahasiswa / Mahasiswi" class="form-control input-md">
  <span class="help-block">Masukan Nama Lengkap Anda</span>  
  </div>
</div>

<!-- Button Drop Down -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttondropdown">Mata Kuliah</label>
  <div class="col-md-4">
        <select class="form-select" name="matkul" aria-label="Default select example">
        <option selected>Harap Pilih !!!</option>
        <option value="DDP">Dasar Dasar Pemograman</option>
        <option value="WEB">Pemograman Website</option>
        <option value="BD">Basis Data</option>
    </div>
</div>
</select>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UTS</label>  
  <div class="col-md-4">
  <input type="text" name="nilai_uts" value="" placeholder="Masukan Angka" class="form-control input-md">
  <span class="help-block">Harap Masukan Nilai!</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UAS</label>  
  <div class="col-md-4">
  <input type="text" name="nilai_uas" value="" placeholder="Masukan Angka" class="form-control input-md">
  <span class="help-block">Harap Masukan Nilai!</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai Tugas/Praktikum</label>  
  <div class="col-md-4">
  <input type="text" name="nilai_tugas" placeholder="Masukan Angka" class="form-control input-md">
  <span class="help-block">Harap Masukan Nilai!</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button type="submit" name="proses" value="Simpan" class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>
</form>
<footer>
<div>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: gray;">
            ?? Develop By Muhammad Alif Luthan
    <a class="text-dark"></a>
</div>
</footer>
</body>
</html>