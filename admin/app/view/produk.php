<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	include_once 'app/module/produk/list.php';
	include_once 'app/module/produk/action.php';
?>
<!-- tampil tabel produk -->
<div class="container">
	<blockquote>
		<h4> Pengelolaan Produk</h4>
	</blockquote>
	<div class="card-panel">
		<div class="row">
			<div class="col s12 m6">
			</div>
			<div class="input-field col s12 m6">
				<i class="material-icons prefix">search</i>
				<input id="cariProduk" type="text" class="validate">
				<label for="cariProduk">Cari berdasarkan Nama, Kategori, Tanggal Post</label>
			</div>
			
		</div>
		<a href="<?= BASE_URL; ?>tambah_produk" class="btn">+Tambah Produk</a>
		<table class="highlight ajax">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Kategori</th>
					<th>Tanggal Post</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1 ?>
				<?php foreach ($produk as $row): ?>
				<tr>
					<td><?= $no++ ?></td>
					<td class="readmore"><?= $row['nama_produk'] ?></td>
					<td class="readmore"><?= $row['nama_kategori'] ?></td>
					<td><?= $row['tanggal_posting'] ?></td>
					<td>
						<a href="<?= BASE_URL; ?>produk/<?= $row['id'] ?>" class="btn red" onclick="confirm('Yakin hapus?')"><i class="material-icons">delete_forever</i></a>
						<a href="<?= BASE_URL; ?>edit_produk/<?= $row['id'] ?>/<?= $row['id_kategori'] ?>" class="btn blue" ><i class="material-icons">border_color
						</i></a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>