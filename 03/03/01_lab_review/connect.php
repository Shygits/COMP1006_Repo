<?php
//STORE DB CONNECTION INFO IN VARIABLE

$host = "localhost";
$db = "lab_one";
$user = "root";
$pword = " ";

$dsn ="mysql:host=$host;dbname=$db";

//WHAT WE WANT TO HAPPEN
try{
    $pdo = new PDO($dsn, $user, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p> YAY! CONNECTED! </p>";
}

catch(PDOException $e) {
die("Database connection failed: " .$e->getMessage());
}
