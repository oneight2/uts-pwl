<?php 
include_once "../../function/function.php";
$key = $_GET['cari'];

$list_artikel = query("SELECT * FROM artikel WHERE judul_artikel LIKE '%$key%' ");
//produk
$list_produk = query("SELECT * FROM produk WHERE nama_produk LIKE '%$key%'");


 ?>
 
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
	<div class="row">
		<div class="col s12 center">
			<h4>Artikel</h4>
		</div>
	</div>
	<div class="row">
		<?php foreach ($list_artikel as $row): ?>
		<div class="col s12 m3">
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
