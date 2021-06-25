<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Moontimes_Database";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to Connect !");
}