<?php 

//for
/*
for()
didalamnya ada 3
1. inisialisasi = variable awal untuk pengulangan
2. kondisi terminasi = memberhentikan pengulangan
3. increment atau decrement = menentukan 
pengulannya maju atau mundur
*/

for($i = 0; $i < 10; $i++){
    echo "hello world! <br>";
} 

//while
//kalo kondisinya true, lakukan yang 
//di dalam kurung kurawal {}
//cek dulu, baru jalanin
$f = 0;
while($f < 5){
    echo "hello!! <br>";
    $f++;
}

//do while
//lakukan hal ini selama kondisinya true
//jalankan dulu, baru cek kondisi
$y = 10;
do{
    echo "hello world? <br>";
    $y++;
}while($y < 5);

?>