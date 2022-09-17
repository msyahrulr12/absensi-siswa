<?php

include dirname(__DIR__).'/config/config.php';

function getDataKelas() {
    global $conn;

    $stmt = $conn->query("SELECT * FROM kelas");
    
    return $stmt;
}