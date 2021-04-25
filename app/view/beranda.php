<?php
include_once 'app/module/beranda/list.php';
?>
<div class="slider">
    <ul class="slides">
        <?php foreach ($slider as $row): ?>
        <li>
            <img src="<?=BASE_URL .'admin/img/slide/'.$row['foto'] ?>"> <!-- random image -->
            <div class="caption <?= $row['align_text']?>">
                <h3><?= $row['judul']?></h3>
                <h5 class="light grey-text text-lighten-3 "><?= $row['konten']?></h5>
            </div>
        </li>
        <?php endforeach ?>
    </ul>
</div>
<div class="container">
    <div class="section">
        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 center">
                <img src="<?= BASE_URL.'admin/img/profil/'.$profil['foto']?>" class="logo">
                <div>
                    <?= $profil['deskripsi'] ?>
                </div>
                <a target="_blank" class="btn btn-large center green" href="<?= $sosmed['whatsapp'] ?>">
                <i class="fab fa-whatsapp"></i></a>
                
                <a target="_blank" class="btn btn-large center blue" href="<?= $sosmed['facebook'] ?>">
                <i class="fab fa-facebook"></i></a>
                
                <a target="_blank" class="btn btn-large center red" href="<?= $sosmed['youtube'] ?>">
                <i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="parallax-container valign-wrapper">
<div class="section no-pad-bot">
    <div class="container">
        <div class="row center">
            <h4 class="header col s12 light"><?= $parallax['konten'] ?></h4>
        </div>
    </div>
</div>
<div class="parallax"><img src="<?=BASE_URL.'admin/img/parallax/'.$parallax['foto']?>" alt="Unsplashed background img 2"></div>
</div>
<div class="container-2">
<div class="row">
    <div class="col s12 center">
        <h4>Produk Kami</h4>
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
<div class="container-2">
<div class="row">
    <div class="col s12 center">
        <h4>Artikel Terbaru</h4>
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
</div>
<div class="container-2">
<div class="section">
    <div class="row">
        <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Review Kami</h4>
        </div>
    </div>
    <div class="row center">
        <div class="col s12 m6 vid-kontak">
            <?= $video['video1'] ?>
        </div>
        <div class="col s12 m6 vid-kontak">
            <?= $video['video2'] ?>
        </div>
    </div>
    
</div>
</div>