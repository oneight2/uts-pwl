<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	include_once 'app/module/artikel/list.php';
	include_once 'app/module/artikel/actionTambah.php';
?>
<div class="container">
	<blockquote>
		<h4>Tambah Artikel</h4>
	</blockquote>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-panel">
			<div class="row">
				<div class="col s12 m6">
					<div class="input-field">
						<input type="text" name="judul_artikel">
						<label for="judul">Judul Produk</label>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col s12 m6">
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
			</div>
			
			<blockquote>
				<b>Konten artikel</b>
			</blockquote>
			
			
			<textarea id="ckeditor" name="deskripsi">
			</textarea>
			<div class="row">
				<div class="input-field col s12">
					<button type="submit" class="btn gradient-45deg-indigo-purple right" name="tambahArtikel">+Tambah</button>
				</div>
			</div>
		</form>
	</div>
</div>