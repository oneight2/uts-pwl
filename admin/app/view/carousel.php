<?php
	if(!isset($_SESSION['status'])){
	header("Location: ".BASE_URL."login");
	exit;
	}
	include_once 'app/module/carousel/list.php';
	include_once 'app/module/carousel/action.php';
?>
<div class="container">
	<blockquote>
		<h4> Pengelolaan Carousel</h4>
	</blockquote>
	<div class="row">
		<div class="col s12 m12">
			<div class="card-panel">
				<form method="post" action="" enctype="multipart/form-data">
					<div class="row">
						<div class="col s12 m8">
							<div class="file-field">
								<div class="btn btn-small">
									<span>carousel</span>
									<input type="file" name="slide">
									
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
							</div>
							<div class="browser-default col s12 m4">
								<select name="align">
									<option value="" disabled selected>Pilih Teks Align</option>
									<option value="left-align">Kiri</option>
									<option value="right-align">Kanan</option>
									<option value="center-align">Center</option>
								</select>
							</div>
						
					</div>
					<div class="row">
						<div class="col s12 m6">
							<div class="input-field">
								<input type="text" name="headline" id="headline">
								<label for="headline">Headline</label>
							</div>
						</div>
						<div class="col s12 m6">
							<div class="input-field">
								<input type="text" name="konten" id="konten">
								<label for="konten">Konten</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<button type="submit" class="btn gradient-45deg-indigo-purple right" name="tambahCarousel">+Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12">
			<?php $no=1 ?>
			<?php foreach ($carousel as $row): ?>
			<div class="col s12 m4 relative">
				<img src="<?= BASE_URL .'img/slide/'.$row['foto'] ?>" style="max-width: 90%">
				<a href="<?= BASE_URL.'carousel/'.$row['id'] ?>" class="btn-floating center-align tooltipped data_carousel" data-position="top" data-tooltip="Hapus" onclick="confirm('Yakin hapus?')"><i class="material-icons">highlight_off</i></a>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>