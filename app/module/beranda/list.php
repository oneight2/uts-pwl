<?php
//pengumuman
$pengumuman = query("SELECT * FROM artikel");

//slider
$slider = query("SELECT * FROM carousel");
// parallax
$parallax = query("SELECT * FROM parallax")[0];
// artikel
$list_artikel = query("SELECT * FROM artikel ORDER BY id DESC LIMIT 4 ");
//produk
$list_produk = query("SELECT * FROM produk LIMIT 10");

// profil
$profil = query("SELECT * FROM profil")[0];
// kategori
$kategori = query("SELECT * FROM kategori");
// video
$video = query("SELECT * FROM video")[0];
//
$sosmed = query("SELECT * FROM footer")[0];


