<?php
// MEMBUAT ARRAY
$animals = ["burung", "kucing", "nyamuk", "singa"];
echo $animals[0] . "<br>";
echo $animals[3] . "<br>";

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// ARRAY ASSOCIATIVE
$mahasiswa = ["nama" => "Salwa", "jurusan" => "SI", "semester" => 2];

foreach ($mahasiswa as $key => $value) {
    echo "Key : " . $key . " Value : " . $value . "<br>";
}

// ARRAY MULTIDIMENSI
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "OS"]
];

foreach ($dosen as $dsn) {
    foreach ($dsn as $dta) {

        echo $dta . "<br>";
    }
}
