<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$date = date("Y-m-d");

$req = $pdo->prepare("INSERT INTO receipts (product_id, quantity, DateTime) VALUES (?, ?, ?)");
$req->execute([$product_id, $quantity, $date]);
header('Location: /index.php');
