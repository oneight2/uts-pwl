<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	include_once 'app/module/kategori/list.php';
	include_once 'app/module/kategori/action.php';
?>
<div class="container">
	<blockquote>
		<h4> Pengelolaan Kategori Produk</h4>
	</blockquote>
	<div class="row">
		<div class="col s12 m6">
			<div class="card-panel">
				<form class="" method="post" action="">
					<div class="input-field">
						<input id="" type="text" name="kategori">
						<label for="first_name">Nama Kategori</label>
					</div>
					<button class="btn" name="tambahKategori">+ Kategori Produk</button>
				</form>
			</div>
		</div>
		<div class="col s12 m6">
			<div class="card-panel">
				<table class="highlight">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1 ?>
						<?php foreach ($kategori as $row): ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $row['nama_kategori'] ?></td>
							<td>
								<a href="<?= BASE_URL .'edit_kategori/'.$row['id_kategori'] ?>" class="btn blue"><i class="material-icons">border_color</i></a>
								<a href="<?= BASE_URL; ?>kategori/<?= $row['id_kategori'] ?>" class="btn red" onclick="confirm('Yakin hapus?')"><i class="material-icons">delete_forever
						</i></a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>