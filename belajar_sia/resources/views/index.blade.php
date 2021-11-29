<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Sia</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
	<script src="/js/highcharts.js"></script>
</head>
<body>
<div class="container">
		<div class="card">
			<div class="card-body">
				
				<div class="form-group">
					
				</div>
	<h3>Data Sia</h3>

	<a href="/sia/tambah"> + Tambah Data Baru</a>
	
	<br/>
	<br/>

	<table class="table table-bordered">
		<tr>
			<th><center>Kode Matkul</center></th>
			<th><center>Nama Matkul</center></th>
			<th><center>Kode Dosen</center></th>
			<th><center>Jam</center></th>
			<th><center>Jumlah Mahasiswa</center></th>
			<th><center>Opsi</center></th>
		</tr>
		@foreach($users as $p)
		<tr>
			<td><center>{{ $p->sia_kd_matkul }}</center></td>
			<td><center>{{ $p->sia_nm_matkul }}</center></td>
			<td><center>{{ $p->sia_kd_dosen }}</center></td>
			<td><center>{{ $p->sia_jam }}</center></td>
			<td><center>{{ $p->sia_jml_mhs }}</center></td>
			<td>
				<a class="btn btn-danger btn-sm" href="/sia/edit/{{ $p->sia_id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/sia/hapus/{{ $p->sia_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
  
</body>
</html>