<?php
$servername = "localhost";
$username = "u290663640_qa";
$password = "0~X7iuSJu#vt";
$dbname = "u290663640_qa";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
