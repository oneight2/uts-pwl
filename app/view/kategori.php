<?php
	$id = $url[1];
	include_once 'app/module/kategori/list.php';
?>
<div class="container-2 ajax">
	<div class="row">
		<div class="col s12 center">
			<h4>Produk</h4>
		</div>
		<?php foreach ($list_produk as $row): ?>
		<div class="col s12 m3">
			<div class="card small smallest">
				<div class="card-image">
					<img src="<?=BASE_URL.'admin/img/produk/'.$row['foto']?>">
					<span class="card-title"><?= $row['nama_produk']?></span>
				</div>
				<div class="card-action">
					<a href="<?=BASE_URL.'view_produk/'. $row['id']?>">Lihat Produk</a>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>