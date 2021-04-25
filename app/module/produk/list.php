<?php 

$produk = query("SELECT * FROM produk WHERE id=$id");
// $gambar_produk = query("SELECT * FROM gambar_produk where id=$id");
$list_produk = query("SELECT * FROM produk ORDER BY rand() DESC LIMIT 4 ");
$sosmed = query("SELECT * FROM footer")[0];