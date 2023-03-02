<?php
$arrayBuah = ["semangka","apel","mangga","anggur merah"];

//mengurutkan array
sort($arrayBuah);

//mengahapus nilai array yang paling terakhir
array_pop($arrayBuah);

//menghapus spesifikasi value array tertentu
unset($arrayBuah[1]);

//menambahkan value array dari belakang
array_push($arrayBuah,"jeruk");

//menghapus nilai array yang paling depan
array_shift($arrayBuah);

//menambahkan value array dari depan
array_unshift($arrayBuah);

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}