<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="hypertext_troop";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed To Connect :(");
}
/* $con=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
switch ($_POST['action']) {
    case 'hypertext_troop':
        $user_name=$_POST['user_name'];
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        break;
    
    default:
        # code...
        break;
}*/