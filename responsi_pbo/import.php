<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\satu\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new data\dua\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;