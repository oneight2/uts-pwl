<?php
include_once "../../function/function.php";
$key = $_GET['cariArtikel'];
//produk
$list_artikel = query("SELECT * FROM artikel
					WHERE judul_artikel LIKE '%$key%' OR
						tanggal_posting LIKE '%$key%'");
?>
<table class="highlight ajax">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Konten</th>
			<th>Gambar</th>
			<th>Tanggal Post</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1 ?>
		<?php foreach ($list_artikel as $row): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td class="readmore"><?= $row['judul_artikel'] ?></td>
			<td class="readmore"><?= $row['konten'] ?></td>
			<td><img src="<?= BASE_URL.'img/artikel/'.$row['foto'] ?>" style="max-width: 150px"></td>
			<td><?= $row['tanggal_posting'] ?></td>
			<td>
				<a href="<?= BASE_URL; ?>edit_artikel/<?= $row['id'] ?>" class="btn blue"><i class="material-icons">border_color</i></a>
				<a href="<?= BASE_URL; ?>artikel/<?= $row['id'] ?>" class="btn red" onclick="Hapus ini?"><i class="material-icons">delete_forever
				</i></a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>