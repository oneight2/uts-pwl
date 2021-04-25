<?php
$id = $url[1];
include_once "app/module/artikel/list.php";
?>
<?php foreach ($artikel as $row): ?>
<div class="container">
	<h3 class=""><?= $row['judul_artikel']  ?></h3>
	<p class="valign-wrapper"><i class="material-icons">schedule</i>   <?= $row['tanggal_posting']  ?></p>
	<img src="<?= BASE_URL.'admin/img/artikel/'.$row['foto']  ?>" class="materialboxed center" width="650">
	<?= $row['konten']  ?>
	<?php endforeach ?>
	<div class="row">
		<div class="col s12 left">
			<blockquote>
				<h5>Artikel Lainnya</h5>
			</blockquote>
		</div>
	</div>
		<div class="row">
			<?php foreach ($list_artikel as $row): ?>
			<div class="col s12 m4">
				<div class="card small">
					<div class="card-image">
						<img src="<?=BASE_URL.'admin/img/artikel/'.$row['foto']?>">
						<span class="card-title"><?= $row['judul_artikel']?></span>
					</div>
					<div class="card-content">
						<?= $row['konten']  ?>
					</div>
					<div class="card-action">
						<a href="<?=BASE_URL.'view_artikel/'. $row['id']?>">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
</div>
