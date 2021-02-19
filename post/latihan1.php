<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- kalo tombol submit udah dipencet maka 
tampilkan -->
<?php if(isset($_POST["submit"])):?>
    <h1> Selamat datang, <?= $_POST["nama"]; ?></h1>
<?php endif;?>

    <!-- saya mau bikin sebuah  form, yg method rekuestnya menggunakan post, seluruh data di dalam form akan dikirim ke latihan2.php -->
    <form action="" method="post">
    Masukan Nama : 
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>