<?php
$host = "localhost";
$username = "root";
$password = "1234";
$dbname = "pharmacy";
$connect = new mysqli($host,$username,$password,$dbname);
mysqli_set_charset($connect,"utf8");
?>
