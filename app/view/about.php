<?php
include_once 'app/module/about/list.php';
?>
<div class="slider">
	<ul class="slides">
		<?php foreach ($slider as $row) : ?>
			<li>
				<img src="<?= BASE_URL . 'admin/img/slide/' . $row['foto'] ?>"> <!-- random image -->
				<div class="caption <?= $row['align_text'] ?>">
					<h3><?= $row['judul'] ?></h3>
					<h5 class="light grey-text text-lighten-3 "><?= $row['konten'] ?></h5>
				</div>
			</li>
		<?php endforeach ?>
	</ul>
</div>
<div class="container">
	<div class="section">
		<!--   Icon Section   -->
		<div class="row">
			<div class="col s12 center">
				<img src="<?= BASE_URL . 'admin/img/profil/' . $profil['foto'] ?>" class="logo">
				<div>
					<?= $profil['deskripsi'] ?>


					<a target="_blank" class="btn btn-large center green" href="<?= $sosmed['whatsapp'] ?>">
						<i class="fab fa-whatsapp"></i></a>

					<a target="_blank" class="btn btn-large center blue" href="<?= $sosmed['facebook'] ?>">
						<i class="fab fa-facebook"></i></a>

					<a target="_blank" class="btn btn-large center red" href="<?= $sosmed['youtube'] ?>">
						<i class="fab fa-youtube"></i></a>

				</div>
			</div>
		</div>
	</div>
</div>