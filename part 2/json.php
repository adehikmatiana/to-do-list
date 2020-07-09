<?php

$anggota = [
    ['nama' => 'tiana', 'alamat' => 'Bekasi'],
    ['nama' => 'dandi', 'alamat' => 'cirebon'],
    ['nama' => 'indra', 'alamat' => 'galaxy'],
];

$data = json_encode($anggota);
file_put_contents('data.txt', $data);
// $output = file_get_contents('data.txt');
// $hasil  = json_decode($output, true);
print_r($data);
