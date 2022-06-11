<?php
require "db.php";
$db_products = R::findAll('Models');
$products = array();
foreach($db_products as $row) {
    $products[] = $row;
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
    <link rel="stylesheet" href="/css/catalog.css">
    <title>Elwau</title>
</head>

<body>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <nav class="nav">
                    <ul class="menu">
                        <li class="menu_liner"><a class="menu_link" href="/about-company.html">О компани</a></li>
                        <li class="menu_liner"><a class="menu_link" href="#">Каталог</a></li>
                        <li class="menu_liner"><a class="menu_link" href="#">Доставка</a></li>
                        <li class="menu_liner"><a class="menu_link" href="#">Контакты</a></li>
                        <li class="menu_liner"><a class="menu_link" href="#"><?php echo $products[1]; ?></a></li>
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
                            <a class="header-mail" href="#">Написать сообщение</a>
                        </div>
                    </div>
                    <div class="header-contact_right">
                        <div class="header-contact-shop">
                            <a class="header-shop" href="#">В вашей корзине пусто</a>
                        </div>
                        <div class="header-contact-ak">
                            <a class="header-ak" href="signup.html">Войти в личный кабинет</a>
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
                        <a href="product.html">Ссылка 1</a>
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
                <div class="sale sale-container">
                    <?php for ($i = 0; $i < count($products); $i++) : ?>
                    <div class="sale_card">
                        <div class="card">
                            <?php if ($products[$i]-> id != NULL) : ?>
                            <img class="sale-img" src="/img/Catalog/<?php echo $products[$i]->ModelType;?>/<?php echo $products[$i]->ImageNames;?>" alt="icon-catalog">
                            <a class="sale_btn" href="#"><?php echo $products[$i]->Price;?></a>
                            <h3 class="card_text">
                                <a class="cart_text-link" href="/product.php?id=<?php echo $products[$i]->id;?>"><?php echo $products[$i]->name;?></a>
                            </h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endfor;?>
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
                            <li class="menu_liner footer_liner"><a class="menu_link menu_footer-link" href="/about-company.html">О компани</a></li>
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