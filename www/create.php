
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
<h1>Добавить товар</h1>
<form action="actions/store.php" method="post">
    <input type="text" name="name" placeholder="Введите название" required>
    <input type="number" name="price" placeholder="Введите цену" required>
    <input type="number" name="article" placeholder="Введите артикуль" required>
    <input type="submit">
</form>
</body>
</html>
