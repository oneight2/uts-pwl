<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	include_once 'app/module/profil/list.php';
	include_once 'app/module/profil/action.php';
?>
<div class="container">
	<blockquote>
		<h4>Pengelolaan Profil</h4>
	</blockquote>
	<div class="row">
		<div class="col s12 m7">
			<div class="card-panel">
				<form method="post" action="" enctype="multipart/form-data">
					<div class="row">
						<div class="file-field">
							<div class="btn btn-small">
								<span>logo</span>
								<input type="file" name="logo" >
								
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" value="<?= $profil['foto'] ?>" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m12">
							<textarea name="konten" id="ckeditor"><?= $profil['deskripsi'] ?></textarea>
						</div>
					</div>
					
					<div class="row">
						<div class="input-field col s12">
							<button type="submit" class="btn gradient-45deg-purple-amber right" name="editProfil">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col s12 m5">
			<div class="card-panel">
				<div class="row">
					<div class="col s12 m12 center">
						<img src="<?= BASE_URL.'img/profil/'.$profil['foto'] ?>" style="max-width:50% ">
					</div>
				</div>
				<div class="row">
					<div class="col s12 m12 center">
						<?= $profil['deskripsi'] ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>