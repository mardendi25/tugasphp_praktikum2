<!DOCTYPE html>
<html>
<head>

	<title>Form Nilai Siswa</title>
<!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<meta name="theme-color" content="#7952b3">


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="https://getbootstrap.com/docs/5.0/examples/checkout/form-validation.css" rel="stylesheet">
</head>
<body>
	<form class="form-horizontal" method="get" action="array_siswa.php">
<fieldset>
<!-- Form Name -->
<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://s-media-cache-ak0.pinimg.com/originals/40/1e/6c/401e6ce81c674e75a47683ed4d8c4db6.jpg" alt="" width="72">
        <h2>Form Nilai Mahasiswa</h2>

      </div>


<!-- Text input-->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" value="" size="30" class="form-control input-md"/>
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="matkul">Mata Kuliah</label>
  <div class="col-md-4">
    <select id="matkul" name="matkul" class="form-control">
      <option value="Dasar-Dasar Pemrograman">Dasar-Dasar pemrograman</option>
      <option value="Basis Data I">Basis Data I</option>
      <option value="Pancasila dan Pendidikan Kewarganegaraan">Pancasila dan Pendidikan Kewarganegaraan</option>
      <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
      <option value="Bahasa Inggris">Bahasa Inggris</option>
      <option value="Pemrograman Web I">Pemrograman Web I</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="nilai_uts">Nilai UTS</label>  
  <div class="col-md-4">
  <input id="nilai_uts" name="nilai_uts" type="text" value="" class="form-control input-md"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="nilai_uas">Nilai UAS</label>  
  <div class="col-md-4">
  <input id="nilai_uas" name="nilai_uas" type="text" value="" class="form-control input-md"/>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="nilai_tugas">Nilai Tugas/Praktikum</label>  
  <div class="col-md-4">
  <input id="nilai_tugas" name="nilai_tugas" type="text" value="" class="form-control input-md"/>
    
  </div>
</div>

<!-- Button -->
<div class="form-group" align="center">
 	<br/>
    <!-- <input type="submit" id="proses" name="proses"/> -->
    <button type="submit" id="proses" name="sumbit" class="btn btn-primary">SUMBIT</button>
  </div>
</div>

</fieldset>
</form>

<!-- <?php  
$proses= $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
echo 'Proses : '.$proses;
echo "<br/>Nama : ".$nama_siswa;
echo "<br/>Mata Kuliah : ".$mata_kuliah;
echo "<br/>Nilai UTS : ".$nilai_uts;
echo "<br/>Nilai UAS : ".$nilai_uas;
echo "<br/>Nilai Tugas Praktikum : ".$nilai_tugas;
?> -->
</body>
</html>