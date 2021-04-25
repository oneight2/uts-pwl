<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	include_once 'app/module/artikel/list.php';
	include_once 'app/module/artikel/action.php';
?>

<!-- tampil tabel produk -->
<div class="container">
	<blockquote>
		<h4> Pengelolaan Artikel</h4>
	</blockquote>
	<div class="card-panel">
		<div class="row">
			<div class="col s12 m6">
			</div>
			<div class="input-field col s12 m6">
				<i class="material-icons prefix">search</i>
				<input id="cariArtikel" type="text" class="validate">
				<label for="cariArtikel">Cari berdasarkan Nama, Kategori, Tanggal Post</label>
			</div>
			
		</div>
		<a href="<?= BASE_URL; ?>tambah_artikel" class="btn">+Tambah Produk</a>
		<table class="highlight ajax">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Konten</th>
					<th>Gambar</th>
					<th>Tanggal Post</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1 ?>
				<?php foreach ($artikel as $row): ?>
				<tr>
					<td><?= $no++ ?></td>
					<td class="readmore"><?= $row['judul_artikel'] ?></td>
					<td class="readmore"><?= $row['konten'] ?></td>
					<td><img src="<?= BASE_URL.'img/artikel/'.$row['foto'] ?>" style="max-width: 150px"></td>
					<td><?= $row['tanggal_posting'] ?></td>
					<td>
						<a href="<?= BASE_URL; ?>edit_artikel/<?= $row['id'] ?>" class="btn blue"><i class="material-icons">border_color</i></a>
						<a href="<?= BASE_URL; ?>artikel/<?= $row['id'] ?>" class="btn red" onclick="confirm('Yakin hapus?')"><i class="material-icons">delete_forever
						</i></a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>