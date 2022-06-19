<?php 
    require 'db.php';
    $data = $_POST;
    $showError = false;
    if(isset($_SESSION['user'])) {
        if($_SESSION['user']->email != "elwau.pp.ua@gmail.com") {
            header("Location: 404");
        }
    } else {
        header("Location: 404");
    }

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
        if (trim($data['discount']) == '0' || trim($data['discount']) == '') {
            $data['discount'] = NULL;
        }
        if (trim($data['amount']) == '') {
            $error[] = 'Укажите количество товара';
        }
        if (trim($data['description']) == '') {
            $error[] = 'Укажите описание товара';
        }
        if ($_FILES && $_FILES["image"]["error"] != UPLOAD_ERR_OK) {
            $error[] = 'Укажите картинку товара';
        }
        if(empty($error)) {
            $product = R::dispense('models');
            $product ->modelid = $data['modelid'];
            $product ->modeltype = $data['modeltype'];
            $product ->name = $data['name'];
            $product ->producer = $data['producer'];
            $product ->price = $data['price'];
            $product ->discount = $data['discount'];
            $product ->amount = $data['amount'];
            $product ->description = $data['description'];
            $product ->images = $_FILES['image']['name'];
            $path = "img/Catalog/". $data['modeltype'] . "/" . $_FILES['image']['name'];
            R::store($product);
            move_uploaded_file($_FILES["image"]["tmp_name"], $path);
        } else {
            $showError = True;
        }
    }
    $db_types = R::findAll('Types');
    $types = array();
    foreach ($db_types as $row) {
        $types[] = $row;
    }

    $db_producers = R::findAll('producers');
    $allProducers = array();
    foreach ($db_producers as $row) {
        $allProducers[] = $row;
    }
?>



<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/site.webmanifest">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#7f452f">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/addproduct.css">

    <title> добавить товар</title>
</head>

<body>
    <header class="header">
        <div id="popup" class="popup">
            <div class="popup-body">
                <div class="popup-content">
                    <a href="#" class="popup-close">X</a>
                    <div class="popup-title">
                        <h2>Написать нам</h2>
                    </div>
                    <div class="popup-form">
                        <form class="forma-popup" action="#" id="poputs">
                            <p>
                                <input type="text" class="form_input" id="name" name="firstName" pattern="^[А-ЯЁ][а-яё]*$" title="Введите правильный имя в указоному формате: Только русские буквы" placeholder="Имя" required>
                            </p>
                            <p>
                                <input type="mail" class="form_input" id="email" name="email" pattern="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$" title="введите правильный email в указоному формате: elwau@gmail.com" placeholder="email" required>
                            </p>
                            <p>
                                <textarea class="popup-textarea" name="comment" cols="30" rows="4" placeholder="Написать сообщение" required></textarea>
                            </p>
                            <p>
                                <button type="submit" class="popup-btn" name="popup-btn" id="popup-btn">Отправить</button>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="header-top">
            <div class="container">
                <nav class="nav">
                    <ul class="menu">
                        <li class="menu_liner"><a class="menu_link" href="/index.php">Главная</a></li>
                        <li class="menu_liner"><a class="menu_link" href="/catalog.php">Каталог</a></li>
                        <li class="menu_liner"><a class="menu_link" href="/about-company.php">О компани</a></li>
                        <li class="menu_liner"><a class="menu_link" href="/contacts.php">Контакты</a></li>
                        <?php if ($user->email == "elwau.pp.ua@gmail.com") : ?>
                            <li class="menu_liner"><a class="menu_link" href="/addproduct.php">Добавить товар</a></li>
                        <?php endif; ?>
                    </ul>
                    <div class="input">
                        <input class="input_text" type="text" placeholder="поиск по каталогу">
                    </div>
                </nav>
            </div>
        </div>
        <div class="header-info">
            <div class="container">
                <div class="header-local">
                    <a class="logo" href="#"><img src="/img/Header/LOGO.png" alt="LOGO"></a>
                    <div class="header-contact-left">
                        <div class="header-contact_tell">
                            <a class="tell" href="tel:380981927420">+(380) <span class="tell-color">98-192-74-20</span>,</a>
                            <a class="tell-right" href="tel:380971256912">(380) <span class="tell-color">97-125-69-12</span></a>
                        </div>
                        <div class="header-contact_mail">
                            <a class="header-mail" href="#popup">Написать сообщение</a>
                        </div>
                    </div>
                    <div class="header-contact_right">
                        <div class="header-contact-shop">
                            <a class="header-shop" href="#">В вашей корзине пусто</a>
                        </div>
                        <div class="header-contact-ak">
                            <?php if ($user) : ?>
                                <a class="header-ak" href="#">Здравствуйте, <?php echo $user->firstName; ?></a>
                                <a class="header-ak" href="/logout.php">Выйти</a>
                            <?php else : ?>
                                <a class="header-ak" href="signup.php">Войти в личный кабинет</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="input-input">
            <form action="addproduct.php" enctype="multipart/form-data" method="POST">
                <a> Тип товара </a>
                <select name="modeltype"> 
                    <?php for ($i = 0;$i < count($types);$i++) :?>
                            <option value="<?php echo $types[$i]->modeltypes?>"><?php echo $types[$i]->modeltypes?></option>
                        <?php endfor; ?>
                </select>
                <a> id товара </a>
                <input type="text" name="modelid" required>
                <a> Название товара </a>
                <input type="text" name="name" required>
                <a> Производитель </a>
                <select name="producer">
                        <?php for ($i = 0; $i < count($allProducers);$i++) : ?>
                            <option value="<?php echo $allProducers[$i]->producer?>"><?php echo $allProducers[$i]->producer ?></option>
                        <?php endfor;?>
                        <option value="newProducer" contenteditable="true">Новый производитель</option>
                </select>
                <a> Цена </a>
                <input type="text" name="price" required>
                <a> Скидка, если нету - оставьте пустым </a>
                <input type="text" name="discount" required>
                <a> Количество </a>
                <input type="text" name="amount" required>
                <a> Описание </a>
                <textarea class="addproduct-textarea" type="text" name="description" required></textarea>
                <a> Картинки </a>
                <input class="input-file" type="file" name="image" size="10" required>
                <button class="addproduct-btn" type="submit" name="submit"> Отправить </button>
                <a><?php if ($showError) {echo showError($error);} ?> </a>
            </form>
    
    
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="container">
                <div class="footer_top">
                    <nav class="nav footer_nav">
                        <ul class="footer_menu">
                            <li class="menu_liner"><a class="menu_link footer-menu_link" href="/index.php">Главная</a></li>
                            <li class="menu_liner"><a class="menu_link footer-menu_link" href="/catalog.php">Каталог</a></li>
                            <li class="menu_liner"><a class="menu_link footer-menu_link" href="/about-company.php">О компани</a></li>
                            <li class="menu_liner"><a class="menu_link footer-menu_link" href="/contacts.php">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer_info">
                    <p class="text_info">
                        © 2021-2022 Интернет-супермаркет «Elwau.ua»
                        Адрес: 61000, г.Харьков, ул. Чкалова, д. 1а
                        Тел.: +(380) 98-192-74-20, +(380) 97-125-69-12
                        Email: elwau.ua@gmail.com
                    </p>
                    <img src="/img/footer/footer.png" alt="footer-icon">
                    <img src="/img/footer/footer.png" alt="footer-icon">
                    <p class="text_info-right">
                        Дизайн сайта - Соломаха Олександр
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>