<?php

include dirname(__DIR__).'/config/config.php';
include dirname(__DIR__).'/config/functions.php';

define('TABLE_NAME', 'kelas');

$tableColumns = [
    'kode',
    'kelas'
];

function getDataKelas() {
    global $conn;

    $query = sprintf("SELECT * FROM %s", TABLE_NAME);
    $stmt = $conn->query($query);
    
    return $stmt;
}

function getDataKelasById($id) {
    global $conn;

    $query = sprintf("SELECT * FROM %s WHERE id = %d", TABLE_NAME, $id);
    $stmt = $conn->query($query);
    
    return $stmt->fetch_assoc();
}

function createDataKelas($datas) {
    global $conn;
    global $tableColumns;

    $columnQuery = '';
    foreach ($tableColumns as $column) {
        $columnQuery .= $column . ', ';
    }
    $columnQuery = substr($columnQuery, 0, -2);

    $valueQuery = '';
    foreach ($datas as $value) {
        $valueQuery .= '\''.$value . '\', ';
    }
    $valueQuery = substr($valueQuery, 0, -2);

    $query = sprintf("INSERT INTO %s (%s)
    VALUES (%s)", TABLE_NAME, $columnQuery, $valueQuery);
    $stmt = $conn->query($query);
    
    return $stmt;
}