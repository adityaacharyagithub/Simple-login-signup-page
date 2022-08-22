<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phptuts";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
