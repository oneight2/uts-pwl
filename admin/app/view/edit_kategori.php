<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	$id = $url[1];
	$kategori = query("SELECT * FROM kategori WHERE id_kategori=$id ")[0];
	include_once 'app/module/kategori/action.php';
?>
<div class="container">
	<blockquote>
		<h4>Edit Kategori</h4>
	</blockquote>
	<div class="row">
		<div class="col s12 m6">
			<div class="card-panel">
				<form class="" method="post" action="">
					<div class="input-field">
						<input id="" type="text" name="kategori" value="<?= $kategori['nama_kategori'] ?>">
						<label for="first_name">Edit Kategori</label>
					</div>
					<button class="btn" name="editKategori">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>