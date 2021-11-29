<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Sia</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
<h2>Tambah Data Sia</h2>
<form action="/sia/store" method="post">
     {{ csrf_field() }}
 <div class="form-group">
       <label>Kode Matkul:</label>
         <input type="text" name="kd_matkul" class="form-control" />
 </div>
 <div class="form-group">
       <label>Nama Matkul:</label>
         <input type="text" name="nm_matkul" class="form-control" />
 </div>
  <div class="form-group">
       <label>Kode Dosen:</label>
         <input type="text" name="kd_dosen" class="form-control" />
 </div>
  <div class="form-group">
       <label>Jam:</label>
         <input type="text" name="jam" class="form-control" />
 </div>
  <div class="form-group">
       <label>Jumlah Mahasiswa:</label>
         <input type="text" name="jml_mhs" class="form-control" />
 </div>
 <br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="/sia"> Kembali</a>

</body>
</html>