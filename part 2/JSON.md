# JSON (JavaScript Object Notation)

Sebuah format data yang digunakan untuk pertukaran dan penyimpanan data.
JSON merupakan bagian (subset) dari Javascript. JSON bisa dibaca dengan berbagai macam bahasa pemrograman seperti PHP, C, C++, C#, Java, Javascript Perl, Python, dan banyak lagi.

**Hal ini membuat JSON menjadi bahasa yang ideal untuk perturakan data antar aplikasi.**

## Mengubah Array dalam bentuk JSON

Untuk mengubah array dalam bentuk JSON, sintaksnya adalah sebagai berikut.

`json_encode($array);`

```php
$data = json_encode($anggota);
file_put_contents('data.txt', $data);
```

## Mengubah Json ke dalam bentuk Array

Untuk mengubah data json kembali ke bentuk array, sintaksnya adalah sebagai berikut.

`json_decode($array);`

```php
$output = file_get_contents('data.txt');
$hasil  = json_decode($output, true);
print_r($hasil);
```
