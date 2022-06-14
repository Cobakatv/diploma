<?php 
require 'db.php';

?>



<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title> добавить товар</title>
</head>

<body>
    <div class="input-input">
        <form action="addproduct.php" method="POST">
            <a> Тип товара </a>
            <input type="text" name="typeofmodel">
            <a> id товара </a>
            <input type="text" name="modelid">
            <a> Название товара </a>
            <input type="text" name="name">
            <a> Производитель </a>
            <input type="text" name="producer">
            <a> Цена </a>
            <input type="text" name="price">
            <a> Скидка, если нету - оставьте пустым </a>
            <input type="text" name="discount">
            <a> Количество </a>
            <input type="text" name="amount">
            <a> Описание </a>
            <input type="text" name="description">
            <a> Картинки </a>
            <input type="text" name="image">
            <button type="submit" name="submit"> Отправить </button>
        </form>


    </div>
</body>

</html>