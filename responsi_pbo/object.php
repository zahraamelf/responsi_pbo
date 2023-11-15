<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Zahra Nabila Melfiani","Kota Malang");

// manipulasi properti nama, alamat, negara
$person1->nama = "Zahra Nabila Melfiani";
$person1->alamat = "Kota Malang";
$person1->negara = "Indonesia";

// menampilkan hasil
echo "nama = {$person1->nama}" . PHP_EOL;
echo "alamat = {$person1->alamat}" . PHP_EOL;
echo "negara = {$person1->negara}" . PHP_EOL;
