<?php

include dirname(__DIR__).'/config/config.php';

function getDataSiswa() {
    global $conn;

    $stmt = $conn->query("SELECT * FROM siswa");
    
    return $stmt;
}