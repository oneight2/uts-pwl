<?php 

if (isset($_POST["tambahArtikel"])) {

    if (tambahArtikel($_POST) > 0) {

        echo "
            <script>
                document.location.href='" . BASE_URL . "artikel';
            </script>
        ";
    }else {
        echo "
            <script>
                document.location.href='" . BASE_URL . "artikel/1/error';
            </script>
        ";
    }
}

function tambahArtikel($data)
{
    global $koneksi;
    $judul = addslashes(htmlspecialchars($data["judul_artikel"]));
    $deskripsi = addslashes($data["deskripsi"]);
    $gambar = uploadFoto();
    $tgl_posting = date('d-m-y');

    //query insert data
    $query = "INSERT INTO artikel
                VALUES
                ('','$judul','$deskripsi','$gambar','$tgl_posting')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
// upload foto
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

    move_uploaded_file($tmpName, 'img/artikel/' . $namaFileBaru);
    return $namaFileBaru;
}