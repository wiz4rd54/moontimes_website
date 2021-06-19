<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Moontimes_Login_Database";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to Connect !");
}