<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="8">
		<thead>
			<tr>
				<th>NPM</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Prody</th>
				<th>Jurusan</th>
				<th>No Telp</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dataMahasiswa as $mhs): ?>
				<tr>
					<td><?= $mhs['npm'] ?></td>
					<td><?= $mhs['nama'] ?></td>
					<td><?= $mhs['kelas'] ?></td>
					<td><?= $mhs['prody'] ?></td>
					<td><?= $mhs['jurusan'] ?></td>
					<td><?= $mhs['no_telp'] ?></td>
					<td><?= $mhs['email'] ?></td>
					<td>
						<a href="">Detail</a>
						<a href="">Edit</a>
						<a href="">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>