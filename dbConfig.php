<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "php_my_sql_db";
$dsn = "mysql:host={$host};dbname={$dbname}";


try {
    $conn = new PDO($dsn, $user, $password);
    $conn->exec("SET time_zone = '+08:00';");
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
