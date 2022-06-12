<?php
$modelid = $_GET['id'];
require 'db.php';
if ($user != null) {
    $user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));
}
$product = R::findOne('Models', 'modelid = ?', [$modelid]);

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
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Elwau</title>
</head>

<body>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <nav class="nav">
                    <ul class="menu">
                        <li class="menu_liner"><a class="menu_link" href="/index.php">Главная</a></li>
                        <li class="menu_liner"><a class="menu_link" href="#">О компани</a></li>
                        <li class="menu_liner"><a class="menu_link" href="#">Каталог</a></li>
                        <li class="menu_liner"><a class="menu_link" href="#">Доставка</a></li>
                        <li class="menu_liner"><a class="menu_link" href="#">Контакты</a></li>
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
                            <a class="header-mail" href="#">Написать сообщение</a>
                        </div>
                    </div>
                    <div class="header-contact_right">
                        <div class="header-contact-shop">
                            <a class="header-shop" href="#">В вашей корзине пусто</a>
                        </div>
                        <div class="header-contact-ak">
                        <?php if($user) : ?>
                                <a class="header-ak" href="#">Здравствуйте, <?php echo $user->firstName;?></a>
                                <a class="header-ak" href="/logout.php" >Выйти</a>
                            <?php else :?>
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
                    <button class="dropdown-btn">Автомодели</button>
                    <div class="dropdown-container">
                        <a href="#">Ссылка 1</a>
                        <a href="#">Ссылка 2</a>
                        <a href="#">Ссылка 3</a>
                    </div>
                    <button class="dropdown-btn">Самолеты</button>
                    <div class="dropdown-container">
                        <a href="#">Ссылка 1</a>
                        <a href="#">Ссылка 2</a>
                        <a href="#">Ссылка 3</a>
                    </div>
                    <button class="dropdown-btn">Вертолеты</button>
                    <div class="dropdown-container">
                        <a href="#">Ссылка 1</a>
                        <a href="#">Ссылка 2</a>
                        <a href="#">Ссылка 3</a>
                    </div>
                    <button class="dropdown-btn">Катера</button>
                    <div class="dropdown-container">
                        <a href="#">Ссылка 1</a>
                        <a href="#">Ссылка 2</a>
                        <a href="#">Ссылка 3</a>
                    </div>
                    <button class="dropdown-btn">Яхты</button>
                    <div class="dropdown-container">
                        <a href="#">Ссылка 1</a>
                        <a href="#">Ссылка 2</a>
                        <a href="#">Ссылка 3</a>
                    </div>
                    <button class="dropdown-btn">Интстументы</button>
                    <div class="dropdown-container">
                        <a href="#">Ссылка 1</a>
                        <a href="#">Ссылка 2</a>
                        <a href="#">Ссылка 3</a>
                    </div>


                </div>
                <div class="news">
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
                </div>

                <div class="sidebar_mail">
                    <a href="#" class="mail-siderbar sidebar_mail-email">Написать нам</a>
                </div>
            </div>
            <div class="content">
                <div class="content-product">
                    <div class="img-product">
                        <?php if ($product->image != NULL) :?>
                            <img src="/img/Catalog/<?php echo $product->modeltype;?>/<?php echo $product->image;?>" alt="kyosho-lazer-zx5">
                        <?php endif; ?>
                    </div>
                    <div class="short-description">
                        <h3 class="product-title"><?php echo $product->name; ?></h3>
                        <table class="shor-des">
                            <tr>
                                <td>Производитель:</td>
                                <?php if ($product->producer != NULL) :?>
                                    <td class="indent"><?php echo $product->producer;?></td>
                                <?php else: ?>
                                    <td class="indent">Неизвестно</td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td>Модель:</td>
                                <td class="indent"><?php echo $product->modelid;?></td>
                            </tr>
                            <tr>
                                <td>Наличие:</td>
                                <?php if ($product->amount > 0) :?>
                                    <td class="indent">В наличии</td>
                                <?php else :?>
                                    <td class="indent">Нет в наличии</td>
                                <?php endif;?>
                            </tr>
                        </table>
                        <button class="btn btn-product">Купить</button>
                        <div class="social">
                            <h3 class="social-text">Поделиться с друзьями</h3>
                            <a href="https://www.facebook.com" target="_blank"><img class="social-icon social-fb" src="/img/social/facebook.png" alt="facebook"></a>
                            <a href="https://twitter.com" target="_blank"><img class="social-icon social-tw" src="/img/social/twitter.png" alt="twitter"></a>
                            <a href="https://www.instagram.com" target="_blank"><img class="social-icon social-in" src="/img/social/instagram.png" alt="instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-description">
                    <h3 class="description-title">Описание</h3>
                    <p class="description-text">
                        Полностью собранное шасси, установленный двигатель Kyosho G20 Stock,
                        электронный регулятор скорости PERFEX KA-15, микроприёмник PERFEX KR-6,
                        сервомашинку PERFEX KS-101BK, покрашенный корпус с наклейками,
                        двухканальный передатчик Perfex/Futaba KT-6, инструкцию, трубочку для антенны приёмника,
                        крестовой/колёсный ключ.
                    </p>

                    <table class="shor-desc">
                        <tr class="slider_color">
                            <td>Длина:</td>
                            <td class="indent">380 мм</td>
                        </tr>
                        <tr>
                            <td>Ширина:</td>
                            <td class="indent">248 мм</td>
                        </tr>
                        <tr class="slider_color">
                            <td>Высота:</td>
                            <td class="indent">145 мм</td>
                        </tr>
                        <tr>
                            <td>Клиренс:</td>
                            <td class="indent">24 мм</td>
                        </tr>
                        <tr class="slider_color">
                            <td>Длина колесной базы:</td>
                            <td class="indent">270 мм</td>
                        </tr>
                        <tr>
                            <td>Колея (передняя/задняя):</td>
                            <td class="indent">176/176 мм</td>
                        </tr>
                        <tr class="slider_color">
                            <td>Ширина колёс (перед/зад)</td>
                            <td class="indent">34/42 мм</td>
                        </tr>
                        <tr>
                            <td>Вес (приблизительно)</td>
                            <td class="indent">1650 г</td>
                        </tr>
                    </table>
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
                            <li class="menu_liner footer_liner"><a class="menu_link menu_footer-link" href="#">О компани</a></li>
                            <li class="menu_liner footer_liner"><a class="menu_link menu_footer-link" href="#">Каталог</a></li>
                            <li class="menu_liner footer_liner"><a class="menu_link menu_footer-link" href="#">Доставка</a></li>
                            <li class="menu_liner footer_liner"><a class="menu_link menu_footer-link" href="#">Контакты</a></li>
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
</body>

</html>