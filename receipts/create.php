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
    <form action="/receipts/actions/store_receipts.php" method="post">
        <select name="product_id" id="">
            <?php foreach ($products as $product): ?>
            <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>
            <?php endforeach; ?>
        </select>
        <input type="number" name="quantity">
        <input type="submit" id="submit">
    </form>
    <a href="/products/index.php">Назад</a>
</body>
</html>
