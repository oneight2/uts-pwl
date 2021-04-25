<?php 
if (isset($_POST["editSosmed"])) {
    if (editSosmed($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "sosial_media';
            </script>
        ";
    }
}
function editSosmed($data)
{
    global $koneksi;
    $gmaps = urldecode($data['gmaps']);
    $whatsapp = urldecode($data['whatsapp']);
    $facebook = urldecode($data['facebook']);
    $youtube = urldecode($data['youtube']);

    $query = "UPDATE footer
                SET gmaps='$gmaps', whatsapp='$whatsapp', facebook='$facebook', youtube='$youtube'";
                

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
