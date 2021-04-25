<?php
include_once "../../function/function.php";
$key = $_GET['cariProduk'];
//produk
$list_produk = query("SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori
					WHERE nama_produk LIKE '%$key%' OR
						tanggal_posting LIKE '%$key%' OR
						nama_kategori LIKE '%$key%'");
?>
<table class="highlight ajax">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Kategori</th>
			<th>Tanggal Post</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1 ?>
		<?php foreach ($list_produk as $row): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td class="readmore"><?= $row['nama_produk'] ?></td>
			<td class="readmore"><?= $row['nama_kategori'] ?></td>
			<td><?= $row['tanggal_posting'] ?></td>
			<td>
				<a href="<?= BASE_URL; ?>produk/<?= $row['id'] ?>" class="btn red" onclick="hapus?"><i class="material-icons">delete_forever</i></a>
				<a href="<?= BASE_URL; ?>edit_produk/<?= $row['id'] ?>/<?= $row['id_kategori'] ?>" class="btn blue" ><i class="material-icons">border_color
				</i></a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>