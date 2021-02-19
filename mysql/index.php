<?php 
//koneksi ke database
//(host, user, pw, nama database)
$db = mysqli_connect("localhost", "root", "", "db_phpdasarrr");

//ambil data dari table
$result = mysqli_query($db, "SELECT * FROM tb_mahasiswa");
// var_dump($result);

//mysqli_fetch_row() = mengembalikan array numerik 
//mysqli_fetch_assoc() = mengembalikan array assosiative
//mysqli_fetch_array() = mengembalikan kedua array
//mysqli_fetch_object() = mengembalikan objek yang array assosiative

//fetch data/ambil data
// while($result_mhs = mysqli_fetch_assoc($result)){
//     var_dump($result_mhs);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>
       
        <?php $no = 1;?>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr> 
            <td><?= $no; ?></td>
            <td><img src="img/<?= $row["gambar_mahasiswa"]; ?>" width="50"></td>
            <td><?= $row["nama_mahasiswa"];?></td>
            <td><?= $row["nim_mahasiswa"];?></td>
            <td><?= $row["jurusan_mahasiswa"];?></td>
            <td><?= $row["email_mahasiswa"];?></td>
        </tr>
            <?php $no++ ?>
        <?php endwhile;?>
    </table>
</body>
</html>