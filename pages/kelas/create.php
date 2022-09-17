<?php

include '../../model/kelas.php';

if (isset($_POST['submit'])) {
    $data = [];
    $data['kode'] = $_POST['kode'];
    $data['kelas'] = $_POST['kelas'];

    $result = createDataKelas($data);

    if ($result) {
        echo 'Berhasil buat data';
    } else {
        echo 'Gagal buat data';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Kelas</title>
</head>
<body>
    <h2>Form Input Data </h2>
    <form action="" method="POST">
        <div>
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas">
        </div>
        <div>
            <label for="kode">Kode</label>
            <input type="text" name="kode">
        </div>
        <input type="submit" name="submit"></input>
    </form>
</body>
</html>