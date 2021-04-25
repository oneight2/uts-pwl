<?php 
	$kategori= query("SELECT * FROM kategori");
	$produk = query("SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori=kategori.id_kategori ORDER BY id DESC");
	
 ?>