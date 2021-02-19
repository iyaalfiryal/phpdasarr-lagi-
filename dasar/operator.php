<?php

//operator penggabung string
// .

$nama1 = "iyal";
$nama2 = "iyul";

echo $nama1 . " " . $nama2;
echo "<p>";

//operator aritmatika
// + - * / %
$x = 30;
$y = 15;
echo "hasil dari $x + $y = " ; 
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x * $y;
echo "<p>";

//operator assignment
// = , += , -= , *= , /= , %= , .=
$x = 1;
$x -= 5;
echo $x;
echo "<br>";

$nama = "haura";
$nama .= " ";
$nama .= "salsa";
echo $nama;
echo "<p>";

//operator perbandingan
// < , > , <= , >= , == , !=
var_dump(1 == "1");
echo "<br>";

//operator identitas
// === , !===
var_dump(123);



?>