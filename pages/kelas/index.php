<?php

// include '../../config/config.php';
include '../../model/kelas.php';

$dataKelas = getDataKelas();

while ($data = $dataKelas->fetch_assoc()) {
    echo $data['id'];
}