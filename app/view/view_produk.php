<?php
$id = $url[1];
include_once "app/module/produk/list.php";
?>
<?php foreach ($produk as $row): ?>
<div class="container">
	<div class="row center">
		
		<h3><?= $row['nama_produk'] ?></h3>
		
	</div>
</div>
<div class="row">
	<div class="col s12 m12">
		<div class="slider">
			<ul class="slides">
				
				
				<li>
					<img src="<?=BASE_URL .'admin/img/produk/'.$row['foto'] ?>" >
				</li>
				
			</ul>
		</div>
	</div>
</div>
<div class="container-1">
	<div class="row">
		<div class="col s12 m12">
			<h5 class="center">Deskripsi Produk</h5>
			<?= $row['deskripsi'] ?>
			<div class="center">
				<a target="_blank" class=" waves-effect waves-light  btn btn-large center green" href="<?= $sosmed['whatsapp'] ?>">
				<i class="fab fa-whatsapp"></i> Hubungi Kami</a>
			</div>
		</div>
	</div>
</div>
<?php endforeach ?>
<div class="container-2">
	<div class="row">
		<h4 class="center"> Produk Lainnya</h4>
	</div>
	<div class="row">
		<?php foreach ($list_produk as $row): ?>
		<div class="col s12 m3">
			<div class="card small smallest">
				<div class="card-image">
					<img src="<?=BASE_URL.'admin/img/produk/'.$row['foto']?>">
					<span class="card-title"><?= $row['nama_produk']?></span>
				</div>
				<div class="card-action">
					<a href="<?=BASE_URL.'view_produk/'. $row['id']?>">lihat produk</a>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>