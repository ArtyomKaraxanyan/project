<?php

$servername = "homework";
$usname = "root";
$pass = "";
$dbname = "project";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usname, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");

   // echo "New record created successfully";
}

catch(PDOException $e)
{
     $e->getMessage();
}




?>