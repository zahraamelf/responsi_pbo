<?php

// import data/person.php
require "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Zahra Nabila Melfiani","Kota Malang");

// panggil function
$person1->sayHello("Zahra Nabila Melfiani");
