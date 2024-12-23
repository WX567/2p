<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$receipts = $pdo->query("SELECT receipts.*, products.name AS name FROM receipts LEFT JOIN products ON receipts.product_id = products.id")->fetchAll(PDO::FETCH_ASSOC);
$products_count = $pdo->query("SELECT products.name as name, SUM(receipts.quantity) as product_count FROM receipts LEFT JOIN products ON product_id = products.id GROUP BY receipts.product_id")->fetchAll(PDO::FETCH_ASSOC);
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
<h1>Поступления</h1>

<h2>Общие поступлления</h2>

<table>
    <tr>
        <th>Товар</th>
        <th>Количество</th>
    </tr>
    <?php foreach ($products_count as $product_count): ?>
    <tr>
        <td><?= $product_count['name'] ?></td>
        <td><?= $product_count['product_count'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
    
<table>
<thead>
<tr>
    <th>#</th>
    <th>Дата и время</th>
    <th>Товар</th>
    <th>Кол-во товара</th>
</tr>
<?php foreach ($receipts as $receipt): ?>
    <tr>
        <th><?= $receipt['id'] ?></th>
        <th><?= $receipt['DateTime'] ?></th>
        <th><?= $receipt['name'] ?></th>
        <th><?= $receipt['quantity'] ?></th>
    </tr>
<?php endforeach; ?>
</thead>
</table>
<a href="/products/index.php">Назад</a>
</body>
</html>
