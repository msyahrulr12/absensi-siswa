<?php

include dirname(__DIR__, 2).'/model/kelas.php';

if (!isset($_GET['id'])) {
    echo 'Tidak ada id';
    exit();
}

$id = $_GET['id'];

$dataKelas = getDataKelasById($id);

if (!$dataKelas) {
    echo sprintf('Tidak ada data dengan ID %d', $id);
    exit();
}

var_dump($dataKelas);
die();