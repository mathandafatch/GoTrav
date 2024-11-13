<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gotrav_users";

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
