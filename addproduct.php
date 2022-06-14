<?php 
    require 'db.php';
    $data = $_POST;
    $showError = false;

    if (isset($data['submit'])) {
        $error = array();
        if (trim($data['modelid']) == '') {
            $error[] = 'Укажите id товара';
        }
        if (trim($data['name']) == '') {
            $error[] = 'Укажите название товара';
        }
        if (trim($data['price']) == '') {
            $error[] = 'Укажите цену товара';
        }
        if (trim($data['price']) == '0') {
            $error[] = 'Укажите цену товара';
        }
        if (trim($data['discount']) == '0') {
            $data['discount'] = '';
        }
        if (trim($data['amount']) == '') {
            $error[] = 'Укажите количество товара';
        }
        if (trim($data['description']) == '') {
            $error[] = 'Укажите описание товара';
        }
        if (trim($data['image']) == '') {
            $error[] = 'Укажите картинку товара';
        }
        if(empty($error)) {
            $product = R::dispence('Models');
            $product ->modelid = $data['modelid'];
            $product ->modeltype = $data['modeltype'];
            $product ->name = $data['name'];
            $product ->producer = $data['producer'];
            $product ->price = $data['price'];
            $product ->discount = $data['discount'];
            $product ->amount = $data['amount'];
            $product ->description = $data['description'];
            $product ->images = $data['image'];
        } else {
            $showError = True;
        }
    }

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
            <input type="text" name="modeltype">
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
            <a><?php if ($showError) {echo showError($error);} ?> </a>
        </form>


    </div>
</body>

</html>