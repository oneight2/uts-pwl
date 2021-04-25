<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	include_once 'app/module/sosmed/list.php';
	include_once 'app/module/sosmed/action.php';
?>
<div class="container">
	<blockquote>
		<h4>Pengelolaan Sosial </h4>
	</blockquote>
	<div class="card-panel">
		<form method="post" action="">
			<div class="row">
				<div class="col s12 m6">
					<div class="input-field">
						<input type="text" name="gmaps" value="<?= urlencode($sosmed['gmaps']) ?>">
						<label for=gmaps>GMaps</label>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="input-field">
						<input type="text" name="whatsapp" value="<?= ($sosmed['whatsapp']) ?>">
						<label for=whatsapp>Whatsapp</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6">
					<div class="input-field">
						<input type="text" name="facebook" value="<?= ($sosmed['facebook']) ?>">
						<label for=facebook>Facebook</label>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="input-field">
						<input type="text" name="youtube" value="<?= urlencode($sosmed['youtube']) ?>">
						<label for=youtube>Youtube</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<button type="submit" class="btn gradient-45deg-purple-amber right" name="editSosmed">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>