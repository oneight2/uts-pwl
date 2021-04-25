<?php
// $id = strtotime(date('d-m-y H:i:s'));
 // & uploadFoto($_FILES) > 0
if (isset($_POST["tambahProduk"])) {

    if (tambahProduk($_POST) > 0)  {

        echo "
            <script>
                document.location.href='" . BASE_URL . "produk';
            </script>
        ";
    }
}

function tambahProduk($data)
{
    global $koneksi, $id;
    $id_kategori = $data["jenis_kategori"];
    $judul = addslashes(htmlspecialchars($data["judul_produk"]));
    $deskripsi = addslashes($data["deskripsi"]);
    $gambar = uploadFoto();
    date_default_timezone_set('Asia/Jakarta');
    $tgl_posting = date('d-m-y');

    //query insert data
    $query = "INSERT INTO produk
                VALUES
                ('','$id_kategori','$judul','$deskripsi','$gambar','$tgl_posting')";
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

    move_uploaded_file($tmpName, 'img/produk/' . $namaFileBaru);
    return $namaFileBaru;
}
// function uploadFoto()
// {
//     global $koneksi, $id;
//         $jumlah = count($_FILES['gambar']['name']);
//     if ($jumlah > 0) {
//         for ($i=0; $i < $jumlah; $i++) { 
//             $file_name = $_FILES['gambar']['name'][$i];
//             $tmp_name = $_FILES['gambar']['tmp_name'][$i];              
//             move_uploaded_file($tmp_name, "img/produk/".$file_name);
//             mysqli_query($koneksi,"INSERT INTO gambar_produk VALUES('$id','$file_name')");               
//         }
       
//     }
// }