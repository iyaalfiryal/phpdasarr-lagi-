<?php
//date()
//untuk menampilkan tanggal dengan format tertentu
date_default_timezone_set("Asia/jakarta");

echo date("D, d m y");
echo "<br>";
echo date("H:i:s");
echo "<br>";

//detik
//detik yg sudah berlalu sejak 1 januari 1970
echo time();
echo "<p>";

//menghitung 1000 hari kedepan
echo date("l, d M Y", time()+60*60*24*1000);
echo "<p>";

//strtotime
//string to time
date_default_timezone_set("Asia/jakarta");
echo date("l", strtotime("24 aug 2002"));

//
?>