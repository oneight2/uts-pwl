<?php 
if (isset($_POST["editParallax"])) {
    if (editParallax($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "parallax';
            </script>
        ";
    }
}
function editParallax($data)
{
    global $koneksi;
    $konten = ($data["quote"]);

    if (isset($_FILES['gambar']['name'])) {
        if ($_FILES['gambar']['name'] == 0) {

        $query = "UPDATE parallax
                    SET konten='$konten' WHERE id=1";
        }else{
        $gambar = uploadFoto();
        $query = "UPDATE parallax
                    SET foto='$gambar', konten='$konten' WHERE id=1";
        }
    }
                

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function uploadFoto()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

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

    move_uploaded_file($tmpName, 'img/parallax/' . $namaFileBaru);
    return $namaFileBaru;
}