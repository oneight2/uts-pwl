<?php

$list_artikel = query("SELECT * FROM artikel ORDER BY id DESC LIMIT 10 ");
//produk
$list_produk = query("SELECT * FROM produk LIMIT 10");


$kategori = query("SELECT * FROM kategori");


