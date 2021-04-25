<?php

include_once("../function/config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm='$username'");
$dosen = mysqli_query($koneksi, "SELECT * FROM dosen WHERE nidn='$username'");
$admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");

if (mysqli_num_rows($mahasiswa) == 1 or mysqli_num_rows($dosen) == 1 or mysqli_num_rows($admin) == 1) {
    session_start();
    //variable tahun ajaran
    $tahunAjaran = mysqli_query($koneksi, "SELECT kode_tahun_ajaran FROM tahun_ajaran ORDER BY kode_tahun_ajaran DESC LIMIT 1");
    $now = mysqli_fetch_assoc($tahunAjaran);
    $_SESSION['kode_tahun_ajaran'] = $now['kode_tahun_ajaran'];

    if (mysqli_num_rows($mahasiswa) == 1) {
        $rows = mysqli_fetch_assoc($mahasiswa);

        if (password_verify($password, $rows['password'])) {
            //ngacek krs acc prodi / acan
            $cek = mysqli_query($koneksi, "SELECT detail_krs.acc_prodi, krs.acc_uang, krs.masuk FROM `detail_krs` JOIN krs ON detail_krs.kode_krs = krs.kode_krs JOIN mahasiswa ON krs.npm = mahasiswa.npm WHERE mahasiswa.npm = '$rows[npm]'");
            $acccek = mysqli_fetch_assoc($cek);
            $_SESSION['acc_uang'] = null;
            $_SESSION['acc_prodi'] = null;
            $_SESSION['acc_masuk'] = null;

            if(mysqli_num_rows($cek) >= 1){
                $_SESSION['acc_uang'] = $acccek['acc_uang'];;
                $_SESSION['acc_prodi'] = $acccek['acc_prodi'];
                $_SESSION['acc_masuk'] = $acccek['masuk'];   
            } 

            $_SESSION['id_user'] = $rows['npm'];
            $_SESSION['status'] = 'mahasiswa';
        }
    } elseif (mysqli_num_rows($dosen) == 1) {
        $rows = mysqli_fetch_assoc($dosen);

        if (password_verify($password, $rows['password'])) {
            $_SESSION['id_user'] = $rows['nidn'];
            $_SESSION['status'] = 'dosen';
        }
    } elseif (mysqli_num_rows($admin) == 1) {
        $rows = mysqli_fetch_assoc($admin);

        if (password_verify($password, $rows['password'])) {
            $_SESSION['id_user'] = $rows['username'];
            $_SESSION['status'] = $rows['bagian'];
        }
    }
    header("Location: " . BASE_URL . "profil");
}

header("Location: " . BASE_URL . "login/error");
