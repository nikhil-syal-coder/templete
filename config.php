<?php



$siteurl="http://localhost/training/php/new_php_task/";

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="current";

$conn=new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {

die("Connection Failed: ".$conn->connect_error);
}


?>