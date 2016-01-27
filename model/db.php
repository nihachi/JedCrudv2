<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "CRUD";

try { //CHECK CONNECTION
    $conn = new PDO("mysql:host=$servername;dbname=CRUD", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //CREATE DB
    $sql = "CREATE DATABASE IF NOT EXISTS CRUD";
    //CREATE TABLE
    $sql = "CREATE TABLE IF NOT EXISTS People(
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name varchar(30) not null,
    address varchar(30) not null,
    age varchar(5) not null,
    contact varchar(15) not null
    )";

    $conn->exec($sql);

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>