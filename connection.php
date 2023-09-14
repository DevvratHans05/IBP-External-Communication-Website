<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "External_Communication_Website";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Failed To Connect!");
}
?>