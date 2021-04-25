<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	include_once 'app/module/produk/list.php';
	include_once 'app/module/produk/actionTambah.php';
?>
<div class="container">
	<blockquote>
		<h4>Tambah Produk</h4>
	</blockquote>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="card-panel">
			<div class="row">
				<div class="col s12 m12">
					<div class="input-field">
						<input type="text" name="judul_produk" id="produk">
						<label for="judul">Judul Produk</label>
					</div>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col s12 m8">
					<div class="file-field">
						<div class="btn">
							<span>Gambar</span>
							<input type="file" name="gambar">
							
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="browser-default col s12 m4 ">
					<select name="jenis_kategori" >
						<option value="" disabled selected>Pilih Kategori</option>
						<?php foreach ($kategori as $row): ?>
						<option value="<?= $row['id_kategori'] ?>"><?= $row['nama_kategori'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			
			
			<blockquote>
				<b>Deskripsi Produk</b>
			</blockquote>
			
			
			<textarea id="ckeditor" name="deskripsi">
			</textarea>
			<div class="row">
				<div class="input-field col s12">
					<button type="submit" class="btn gradient-45deg-indigo-purple right" name="tambahProduk">+Tambah</button>
				</div>
			</div>
		</div>
	</form>
</div>