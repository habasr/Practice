<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "practice";

$con = new mysqli($host, $username, $pass, $db);

if ($con->connect_error) {
  die("DB connection Error." . $con->connect_error);
}
?>     