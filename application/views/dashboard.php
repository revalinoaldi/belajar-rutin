<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2><?= $session_nama; ?></h2>
	<table border="1" cellpadding="8" cellspacing="0">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dataSiswa as $key): ?>
				<tr>
					<td><?= $key['id'] ?></td>
					<td><?= $key['nama'] ?></td>
					<td><?= $key['kelas'] ?></td>
					<td>
						<a href="#">Edit</a>
						<a href="#">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	
</body>
</html>