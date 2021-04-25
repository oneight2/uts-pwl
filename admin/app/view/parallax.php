<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	include_once 'app/module/parallax/list.php';
	include_once 'app/module/parallax/action.php';
?>
<div class="container">
	<blockquote>
		<h4> Pengelolaan Quotes</h4>
	</blockquote>
	<div class="row">
		<div class="col s12 m6">
			<form method="post" action="" enctype="multipart/form-data">
				<div class="card-panel">
					<div class="row">
						<div class="col s12 m12">
							<div class="file-field">
								<div class="btn btn-small">
									<span>Background</span>
									<input type="file" name="gambar">
									
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col s12 m12">
							<div class="input-field">
								<input type="text" name="quote">
								<label for="quote">Quotes</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<button type="submit" class="btn gradient-45deg-purple-amber right" name="editParallax">Edit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col s12 m6">
			<div class="col s12 m12">
				<div class="card-panel center">
					<img src="<?= BASE_URL .'img/parallax/'.$parallax['foto'] ?>" style="max-width: 100%">
					<h5><i><?= $parallax['konten'] ?></i></h5>
				</div>
			</div>
		</div>
	</div>
</div>