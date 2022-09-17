<?php

include dirname(__DIR__).'/config/config.php';

function getDataKelas() {
    global $conn;

    $query = "SELECT * FROM kelas";
    $stmt = $conn->query($query);
    
    return $stmt;
}

function getDataKelasById($id) {
    global $conn;

    $query = sprintf("SELECT * FROM kelas WHERE id = %d", $id);
    $stmt = $conn->query($query);
    
    return $stmt->fetch_assoc();
}