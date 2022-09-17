<?php

include dirname(__DIR__).'/config/config.php';

function getDataAbsensi() {
    global $conn;

    $stmt = $conn->query("SELECT * FROM absensi");
    
    return $stmt;
}
