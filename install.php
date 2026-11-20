<?php
$servername = "localhost";
$username = "root";
$password = "password";

//crete connection
$conn=new PDO("mysql:host=$servername",$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
$sql = "CREATE DATABSE IF NOT EXSIST PackLunch";
$conn->exec($sql);
echo ("database created successfully<br>");
?>