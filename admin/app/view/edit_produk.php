<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	$kategori= query("SELECT * FROM kategori ");
	$editKategori= query("SELECT * FROM kategori WHERE id_kategori=$url[2]")[0];
	$editProduk = query("SELECT * FROM produk WHERE id=$url[1]")[0];
	include_once 'app/module/produk/actionEdit.php';
?>
<div class="container">
	<blockquote>
		<h4>Tambah Produk</h4>
	</blockquote>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-panel">
			<div class="row">
				<div class="col s12 m6">
					<div class="input-field">
						<input type="text" name="nama_produk" id="produk" value="<?= $editProduk['nama_produk'] ?>">
						<label for="nama_produk">Judul Produk</label>
					</div>
					<select name="jenis_kategori">
						<option value="<?= $editKategori['id_kategori'] ?>"><?= $editKategori['nama_kategori'] ?></option>
						<?php foreach ($kategori as $row): ?>
						<option value="<?= $row['id_kategori'] ?>"><?= $row['nama_kategori'] ?></option>
						<?php endforeach ?>
					</select>
					<div class="file-field">
						<div class="btn">
							<span>FOTO</span>
							<input type="file" name="gambar" id="produk">
							
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" value="<?= $editProduk['foto'] ?>">
						</div>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="col s12 m12 center">
						
						<img src="<?= BASE_URL.'img/produk/'.$editProduk['foto'] ?>" style="max-width: 100%">
					</div>
				</div>
			</div>
			
			
			<blockquote>
				<b>Deskripsi Produk</b>
			</blockquote>
			
			
			<textarea id="ckeditor" name="deskripsi">
			<?= $editProduk['deskripsi'] ?>
			</textarea>
			<div class="row">
				<div class="input-field col s12">
					<button type="submit" class="btn gradient-45deg-indigo-purple right" name="editProduk">Simpan</button>
				</div>
			</div>
		</div>
	</form>
</div>