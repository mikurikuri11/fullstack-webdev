<?php

$user = 'test_user';
$pwd = 'pwd';
$host = 'localhost';
$dbname = 'test_phpdb';
$dsn = "mysql:host={$host};port=8899;dbname={$dbname};";
$conn = new PDO($dsn, $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$pst = $conn->query('select * from mst_shops');
$result = $pst->fetchAll();

echo '<pre>';
print_r($result);
echo '<pre>';