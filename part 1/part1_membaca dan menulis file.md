# Membuat File

Untuk membuat file, kita dapat menggunakan fungsi yang sudah disediakan PHP, yaitu `file_put_contents("namafile.ext","pesan");`

1. parameter pertama adalah nama file beserta ekstensinya, Misal filesaya.txt
2. parameter kedua adalah pesan yang akan ditulis dalam file tersebut

```php
<?php
$message="halo admin";
file_put_contents("file.txt",$message);
?>
```

## Membaca File

Untuk membaca isi file, kita dapat menggunakan fungsi `file_get_contents("namafile.ext");`

Parameter yang dikirim melalui fungsi `file_get_contents` adalah nama file yang hendak dibaca.

```php
<?php
$message="halo admin";
file_put_contents("file.txt",$message);

$isi_file = file_get_contents("file.txt");
echo $isi_file;
?>
```
