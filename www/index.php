<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$products = $pdo->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Цена</th>
                <th>Артикль</th>
            </tr>
            <?php foreach ($products as $product): ?>
        <tr>
            <th><?= $product['id'] ?></th>
            <th><?= $product['name'] ?></th>
            <th><?= $product['price'] ?></th>
            <th><?= $product['article'] ?></th>
        </tr>
        <?php endforeach; ?>
        </thead>
    </table>
</body>
</html>
