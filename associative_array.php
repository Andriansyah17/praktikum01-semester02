<?php
$profileArray = [
    [
        "nama" => "Andriansyah",  
        "kelas" => "TI06",
        "ipk" => 3.77,
        "sudah_lulus" => false
    ], [
        "nama" => "Andriansyah",  
        "kelas" => "TI06",
        "ipk" => 3.77,
        "sudah_lulus" => false
    ]  
];

foreach ($profileArray as $profile) {
    echo $profile['nama'];
}