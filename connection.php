<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="hypertext_troop";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed To Connect :(");
}
