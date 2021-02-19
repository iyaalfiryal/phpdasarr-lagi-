<?php 
//pengulangan pada array
//foreach
$angka = [2, 7, 4, 3, 9, 1, 5, 4, 2, 3, 5];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak{
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
    /* supaya turun kebwh */
    .clear{ clear:both; }
    </style>
</head>
<body>
<!-- div mengelompokkan elemen atau tag-tag agar menjadi suatu grup -->
<?php for($x = 0; $x < 11; $x++):?>
    <div class="kotak"><?= $angka[$x]; ?></div>
<?php endfor;?>

<div class="clear"></div>

<?php for($x = 0; $x < count($angka); $x++):?>
    <div class="kotak"><?= $angka[$x]; ?></div>
<?php endfor;?>

<!-- foreach -->
<div class="clear"></div>

<?php foreach($angka as $a):?>
    <div class="kotak"> <?= $a;?> </div>
<?php endforeach;?>


</body>
</html>