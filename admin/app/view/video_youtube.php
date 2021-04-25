<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	include_once 'app/module/youtube/list.php';
	include_once 'app/module/youtube/action.php';
?>
<div class="container">
	<blockquote>
		<h5>Pengelolaan video youtube</h5>
	</blockquote>
	<div class="card-panel">
		<form method="post" action="">
			<div class="row">
				<div class="col s12 m6">
					<div class="input-field">
						<input type="text" name="video1" value="<?= urlencode($youtube['video1']) ?>">
						<label for=video1>video1</label>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="input-field">
						<input type="text" name="video2" value="<?= urlencode($youtube['video2']) ?>">
						<label for="video2">Video2</label>
					</div>
				</div>
			</div>
			<div class="row">
				<blockquote>
					Link video bisa didapatkan dengan cara menklik share pada video lalu pilih sematkan dan salin semua tag element html di youtube dan masukan pada form diatas
				</blockquote>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<button type="submit" class="btn gradient-45deg-purple-amber right" name="editYoutube">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>