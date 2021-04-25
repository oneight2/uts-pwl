<?php


if (isset($_POST["tambahCarousel"])) {
    if (tambahCarousel($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "carousel';
            </script>
        ";
    }
}

if (isset($url[1])) {
    if (hapusCarousel($url[1]) > 0) {
        echo "
             <script>
                document.location.href='" . BASE_URL . "carousel';
            </script> ";
    }
}
function hapusCarousel($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM carousel WHERE id=$id");

    return mysqli_affected_rows($koneksi);
}

function tambahCarousel($data)
{
    global $koneksi;
    $gambar = uploadCarousel();
    $alignTeks = ($data['align']);
    $headline = htmlspecialchars($data["headline"]);
    $konten = htmlspecialchars($data["konten"]);

    $query = "INSERT INTO carousel
                VALUES
                ('','$gambar', '$headline','$konten','$alignTeks')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function uploadCarousel()
{
    $namaFile = $_FILES['slide']['name'];
    $ukuranFile = $_FILES['slide']['size'];
    $error = $_FILES['slide']['error'];
    $tmpName = $_FILES['slide']['tmp_name'];

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

    move_uploaded_file($tmpName, 'img/slide/' . $namaFileBaru);
    return $namaFileBaru;
}
