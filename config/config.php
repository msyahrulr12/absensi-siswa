<?php


include dirname(__DIR__).'/parameter.php';

// Create connection
$conn = new mysqli($data['servername'], $data['username'], $data['password'], $data['database']);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

