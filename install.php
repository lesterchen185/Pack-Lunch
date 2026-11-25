<?php
$servername = "localhost";
$username = "root";
$password = "root";

//crete connection
$conn=new PDO("mysql:host=$servername",$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE IF NOT EXISTS PackLunch";
$conn->exec($sql);
echo ("database created successfully<br>");
$sql = "USE PackLunch";
$conn->exec($sql);
echo("Database selevted seccessfully<br>");
$stmt=$conn->prepare("DROP TABLE IF EXISTS Tbluser;
CREATE TABLE Tblusers
(UserID INI(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Forename VARCHAR(30) NOT NULL,
Surname VARCHAR(30) NOT NULL,
House VARCHAR(30) NOT NULL,
Year INI (2) NOT NULL,
Balance DECIMAL(5,2) NOT NULL,
Password VARCHAR(200) NOT NULL,
Role TINYINI (1) NOT NULL,
Username VARCHAR(30) NOT NULL,
");
$conn->exec($stmt);
echo("Table Tblusers created successfully<br>")
?>