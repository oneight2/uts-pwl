<?php
//pengumuman-----------------------------------------------------------------------------------------------
if (isset($_POST["updatePengumuman"])) {
    if (updatePengumuman($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "pengumuman';
            </script>
        ";
    }
}


function updatePengumuman($data)
{
    global $koneksi;
    $pengumuman = ($data["pengumuman"]);

    $query = "UPDATE pengumuman SET
    pengumuman='$pengumuman'

    WHERE id=1
    ";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

//slider----------------------------------------------------------------------------------------------------
if (isset($_POST["tambahSlider"])) {
    if (tambahSlider($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "slider';
            </script>
        ";
    }
}

if (isset($url[1])) {
    if (hapusSlider($url[1]) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "slider';
            </script>
        ";
    }
}


function tambahSlider($data)
{
    global $koneksi;
    $gambar = uploadSlider();

    $query = "INSERT INTO slider
    VALUES
    ('','$gambar')
    ";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapusSlider($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM slider WHERE id=$id");

    return mysqli_affected_rows($koneksi);
}

function uploadSlider()
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

    if ($ukuranFile > 2400000) {
        echo "<script>
                alert('gambar yang anda masukan terlalu besar');
            </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensiGambar;

    move_uploaded_file($tmpName, 'img/slider/' . $namaFileBaru);
    return $namaFileBaru;
}
