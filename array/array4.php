<?php 
//array assosiatif
//
$mahasiswa = [
    ["nama" => "Firyal", 
    "nim" => "088536245", 
    "jurusan" => "Teknik Informatika", 
    "email" => "fifihuwada@gmail.com"],

    [ "nim" =>"03412673",
     "nama" =>"Haura", 
     "jurusan" =>"Teknik Informatika", 
     "email"=>"haura@gmail.com"],

    ["nama" =>"Anisah", 
    "nim" =>"9728329", 
    "jurusan" =>"Teknik Informatika",
    "email" => "anisah@gmail.com"]
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
        <li>Nama : <?= $m["nama"]?></li>
        <li>NIM : <?= $m["nim"]?></li>
        <li>Jurusan : <?= $m["jurusan"]?></li>
        <li>Email : <?= $m["email"]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>

