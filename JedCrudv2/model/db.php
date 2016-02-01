<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname ="CRUD";
$table ="People";
try {
    $conn = new PDO("mysql:host=localhost;dbname=CRUD","root","root");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS CRUD";
    // use exec() because no results are returned
    $sql = "CREATE TABLE IF NOT EXISTS $table(
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name varchar(30) not null,
    address varchar(30) not null,
    age varchar(5) not null,
    contact varchar(15) not null
    )";
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>