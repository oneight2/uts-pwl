<?php 
$id=$url[1];
if (isset($_POST["editArtikel"])) {
    if (editArtikel($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "artikel';
            </script>
        ";
    }
}
function editArtikel($data)
{
    global $koneksi;
    global $id;
    $judul = htmlspecialchars($data["judul_artikel"]);
    $deskripsi = ($data["deskripsi"]);
    // var_dump($_FILES['gambar']);
    // die();
   	if (isset($_FILES['gambar']['name'])) {
   		if ($_FILES['gambar']['name'] == 0) {
   			$query = "UPDATE artikel
                SET judul_artikel='$judul', konten='$deskripsi'  WHERE id=$id";
   		}else{
   			$gambar = uploadFoto();
   			$query = "UPDATE artikel
                SET judul_artikel='$judul', konten='$deskripsi', foto='$gambar' WHERE id=$id";
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

    move_uploaded_file($tmpName, 'img/artikel/' . $namaFileBaru);
    return $namaFileBaru;
}