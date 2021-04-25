<?php
if (isset($url[1])) {
    if (hapusProduk($url[1]) > 0) {
        echo "
             <script>
                document.location.href='" . BASE_URL . "produk';
            </script> ";
    }
}

function hapusProduk($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM produk WHERE id=$id");

    return mysqli_affected_rows($koneksi);
}


