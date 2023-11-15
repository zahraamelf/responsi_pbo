<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Zahra Nabila Melfiani");
var_dump($company);

$company->programmer = new BackendProgrammer("Zahra Nabila Melfiani");
var_dump($company);

$company->programmer = new FrontendProgrammer("Zahra Nabila Melfiani");
var_dump($company);

sayHelloProgrammer(new Programmer("Zahra Nabila Melfiani"));
sayHelloProgrammer(new BackendProgrammer("Zahra Nabila Melfiani"));
sayHelloProgrammer(new FrontendProgrammer("Zahra Nabila Melfiani"));