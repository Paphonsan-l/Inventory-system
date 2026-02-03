<?php
$host = 'db';
$dbname = 'inventory_db';
$username = 'root';
$password = 'root1234';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>