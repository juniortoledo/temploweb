<?php
session_start();

require __DIR__ . "/vendor/autoload.php";

use App\Config\Routing;

$route = new Routing();
