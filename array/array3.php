<?php 
$mahasiswa = [
    ["Firyal", "088536245", "Teknik Informatika", "fifihuwada@gmail.com"],
    [ "03412673", "Haura", "Teknik Informatika", "haura@gmail.com"],
    ["Anisah", "9728329", "Teknik Informatika", "anisah@gmail.com"]
];

//manggil anisah
// echo $mahasiswa[2][0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $m):?>
    <ul>
        <li>Nama : <?= $m[0]?></li>
        <li>NIM : <?= $m[1]?></li>
        <li>Jurusan : <?= $m[2]?></li>
        <li>Email : <?= $m[3]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>

