<?php 
if (isset($_POST["editProfil"])) {
    if (editProfil($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "profil';
            </script>
        ";
    }
}
function editProfil($data)
{
    global $koneksi;
    $konten = addslashes( $data["konten"]);

    if (isset($_FILES['logo']['name'])) {
        if ($_FILES['logo']['name'] == 0) {
                $query = "UPDATE profil
                SET  deskripsi='$konten'";
        }else{
            $gambar = uploadFoto();
            $query = "UPDATE profil
                SET foto='$gambar', deskripsi='$konten'";
        }
    }
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function uploadFoto()
{
    $namaFile = $_FILES['logo']['name'];
    $ukuranFile = $_FILES['logo']['size'];
    $error = $_FILES['logo']['error'];
    $tmpName = $_FILES['logo']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu !!!');
            </script>";
        return false;
    }

    //validasi apakah yang di upload adalah gambar
    $extensiGambarValid = ['jpg', 'jpeg', 'png'];
    $extensiGambar = explode('.', $namaFile);
    $extensiGambar = strtolower(end($extensiGambar));

    if (!in_array($extensiGambar, $extensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar');
            </script>";
        return false;
    }

    if ($ukuranFile > 10000000) {
        echo "<script>
                alert('gambar yang anda masukan terlalu besar');
            </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensiGambar;

    move_uploaded_file($tmpName, 'img/profil/' . $namaFileBaru);
    return $namaFileBaru;
}