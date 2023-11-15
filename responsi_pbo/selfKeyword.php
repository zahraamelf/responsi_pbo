<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Zahra Nabila Melfiani","Kota Malang");

// panggil function
$person1->sayHello("Zahra Nabila Melfiani");

// panggil self keyword
$person1->info() . PHP_EOL;
