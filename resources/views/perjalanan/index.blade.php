<!DOCTYPE html>
<html>
<head>
    <title>PeduliDiri</title>
</head>
<body>
    <h1>PERJALANAN</h1>
	<a href="/perjalanan/create"> + Tambah</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>id</th>
			<th>tanggal</th>
			<th>jam</th>
			<th>lokasi</th>
			<th>suhu tubuh</th>
            <th>aksi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>