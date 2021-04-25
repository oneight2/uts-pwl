<?php 
if (isset($url[1])) {
    if (hapusArtikel($url[1]) > 0) {
        echo "
             <script>
                document.location.href='" . BASE_URL . "artikel';
            </script> ";
    }
}
function hapusArtikel($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM artikel WHERE id=$id");

    return mysqli_affected_rows($koneksi);
}