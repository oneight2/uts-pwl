<?php 

$artikel = query("SELECT * FROM artikel WHERE id = $id");
$list_artikel = query("SELECT * FROM artikel ORDER BY rand() DESC LIMIT 3 ");