<?php
$message = "ayok\n";

file_put_contents("coba.txt", $message, FILE_APPEND);

$isi_konten = file_get_contents("coba.txt");

echo $isi_konten;
