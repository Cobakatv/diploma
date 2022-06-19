<?php
$page = $_GET['page'];
require "db.php";

$db_products = R::findAll('models');
$products = array();
foreach ($db_products as $row) {
    $products[] = $row;
}
$counter = 3;
$page_count = floor(count($products) / $counter);
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
    <link rel="stylesheet" href="/css/nouislider.min.css">
    <link rel="stylesheet" href="/css/catalog.css">
    <title>Elwau</title>
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
                    <a class="logo" href="/index.php"><img src="/img/Header/LOGO.png" alt="LOGO"></a>
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
    <mail class="mail">
        <div class="container">
            <div class="sidebar">
                <div class="catalog">
                    <div class="search">
                        <input class="input_search" type="text" placeholder="поиск по каталогу">
                    </div>
                    <div class="category">
                        <div class="category-model">
                            <h3 class="model-title">Автомодели</h3>
                            <div class="container-checkbox">
                                <input class="checkbox-input" type="checkbox" id="checkbox1">
                                <label class="checkbox-label" for="checkbox1">Himoto</label>
                            </div>
                        </div>
                        <div class="category-manufacturer">
                            <h3 class="manufacturer-title">Производители</h3>
                            <div class="container-checkbox">
                                <input class="checkbox-input" type="checkbox" id="checkbox2">
                                <label class="checkbox-label" for="checkbox2">Himoto</label>
                            </div>
                        </div>

                    </div>
                    <div class="filters-price__price">
                        <h3 class="filters-price_title">Цена</h3>
                        <div class="filters-price_slider" id="range-slider"></div>
                        <div class="filters-price_inputs">
                            <label class="filters-price_label">
                                <span class="filters-price_text">от</span>
                                <input type="number" class="filters-price_input" id="input1" min="200" max="10000" placeholder="200">
                                <span class="filters-price_text">₴</span>
                            </label>
                            <label class="filters-price_label">
                                <span class="filters-price_text">от</span>
                                <input type="number" class="filters-price_input" id="input2" min="200" max="10000" placeholder="10000">
                                <span class="filters-price_text">₴</span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- <div class="news">
                    <div class="sidebar-news">
                        <p class="date">12.05.2022</p>
                        <h3 class="news-title">Много скидок!</h3>
                        <p class="news-text">
                            Скоро ноябрь, а это значит, что скоро вас ждет большое количество скидок в связи с нашим юбелеем.
                        </p>
                    </div>
                    <div class="sidebar-news">
                        <p class="date">12.05.2022</p>
                        <h3 class="news-title">Много скидок!</h3>
                        <p class="news-text">
                            Скоро ноябрь, а это значит, что скоро вас ждет большое количество скидок в связи с нашим юбелеем.
                        </p>
                    </div>
                    <div class="sidebar-news">
                        <p class="date">12.05.2022</p>
                        <h3 class="news-title">Много скидок!</h3>
                        <p class="news-text">
                            Скоро ноябрь, а это значит, что скоро вас ждет большое количество скидок в связи с нашим юбелеем.
                        </p>
                    </div>
                </div> -->
                <!-- <div class="sidebar_mail">
                    <a href="#" class="mail-siderbar sidebar_mail-email">Написать нам</a>
                </div> -->
            </div>
            <div class="content">
                <div class="sale sale-container">

                    <div class="sale_card">
                        <?php for ($i = $page * $counter; $i < ($page + 1) * $counter; $i++) : ?>
                            <div class="card">
                                <?php if ($products[$i]->id != NULL) : ?>
                                    <img class="sale-img" src="/img/Catalog/<?php echo $products[$i]->modeltype; ?>/<?php echo $products[$i]->image; ?>" alt="icon-catalog">
                                    <a class="sale_btn" href="#"><?php echo $products[$i]->price; ?></a>
                                    <h3 class="card_text">
                                        <a class="cart_text-link" href="/product.php?id=<?php echo $products[$i]->modelid; ?>"><?php echo $products[$i]->name; ?></a>
                                    </h3>
                                <?php endif; ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="page_list">
                        <?php for ($p = 0; $p <= $page_count; $p++) : ?>
                            <a href="/catalog.php?page=<?php echo $p ?>"><button class="page-button"><?php echo $p + 1; ?></button></a>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </mail>
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
    <script src="/js/main.js"></script>
    <script src="/js/nouislider.min.js"></script>
    <script src="/js/rage-slider.js"></script>
</body>

</html>