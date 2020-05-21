<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


//autoload
require_once("vendor/autoload.php");

//Instantiate the F3 Base class
$f3 = Base::instance();

//step one
//default route
$f3->route('GET /', function()
{
    echo '<h1>Midterm Survery</h1>';
    echo '<a href="survey">Take Midterm Survey</a>';
});

//Run F3
$f3->run();