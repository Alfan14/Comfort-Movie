<?php

$host="localhost";
$user="root";
$password="";
$db="formula";
$port="4306";

$kon = mysqli_connect($host,$user,$password,$port);

$hasil=mysqli_select_db($kon,$db);

?>