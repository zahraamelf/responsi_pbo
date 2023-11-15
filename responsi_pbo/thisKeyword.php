<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$person1 = new Person("Zahra Nabila Melfiani", "Kota Malang");

// tambahkan value nama di object
$person1->nama = "Zahra Nabila Melfiani";

// panggil function sayHelloNull dengan parameter
$person1->sayHelloNull("M Afif Fadilah");

// buat object dari kelas person
$person2 = new Person("M Afif Fadilah", "Rejang Lebong");

// tambahkan value nama di object
$person2->nama = "Apip";

// panggil function sayHelloNull dengan parameter null
$person2->sayHelloNull(null);
