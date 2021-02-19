<?php 
//superglobals
//variable global milik php
//merupakan array associative

//$_GET
// $_GET["nama"] = "firyal";
// var_dump($_GET);
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
<ul>
    <?php foreach($mahasiswa as $mhs):?>
        <li>
            <a href="latihan3.php?nama=<?= $mhs["nama"];?>&nim=<?= $mhs["nim"];?>&jurusan=<?= $mhs["jurusan"];?>&email=<?= $mhs["email"];?>">
            <?= $mhs["nama"];?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>