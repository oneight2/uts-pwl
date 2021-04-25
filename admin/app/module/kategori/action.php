<?php


if (isset($_POST["tambahKategori"])) {
    if (tambahKategori($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "kategori_produk';
            </script>
        ";
    }
}
if (isset($_POST["editKategori"])) {
    if (editKategori($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "kategori_produk';
            </script>
        ";
    }
}
if (isset($url[1])) {
    if (hapusKategori($url[1]) > 0) {
        echo "
             <script>
                document.location.href='" . BASE_URL . "kategori_produk';
            </script> ";
    }
}
function hapusKategori($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori=$id");

    return mysqli_affected_rows($koneksi);
}
function tambahKategori($data)
{
    global $koneksi;
    $kategori = htmlspecialchars($data["kategori"]);

    $query = "INSERT INTO kategori
                VALUES
                ('','$kategori')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function editKategori($data)
{
    global $koneksi;
    global $id;
    $kategori = htmlspecialchars($data["kategori"]);

    $query = "UPDATE kategori
                SET nama_kategori='$kategori' WHERE id_kategori=$id";
                

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}