<?php
require 'db.php';
$user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));

$db_products = R::findAll('models');
$products = array();
foreach ($db_products as $row) {
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
    <mail class="mail">
        <div class="container">
            <div class="sidebar">
                <div class="catalog">
                    <button class="dropdown-btn">Автомодели</button>
                    <div class="dropdown-container">
                        <?php for ($i = 0; $i <= count($products); $i++) : ?>
                            <?php if ($products[$i]->id != null) : ?>
                                <?php if ($products[$i]->modeltype == "automodel") : ?>
                                    <a href="/product.php?id=<?php echo $products[$i]->modelid; ?>"><?php echo $products[$i]->name; ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <button class="dropdown-btn">Самолеты</button>
                    <div class="dropdown-container">
                        <?php for ($i = 0; $i <= count($products); $i++) : ?>
                            <?php if ($products[$i]->id != null) : ?>
                                <?php if ($products[$i]->modeltype == "airplane") : ?>
                                    <a href="/product.php?id=<?php echo $products[$i]->modelid; ?>"><?php echo $products[$i]->name; ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <button class="dropdown-btn">Вертолеты</button>
                    <div class="dropdown-container">
                        <?php for ($i = 0; $i <= count($products); $i++) : ?>
                            <?php if ($products[$i]->id != null) : ?>
                                <?php if ($products[$i]->modeltype == "helicopter") : ?>
                                    <a href="/product.php?id=<?php echo $products[$i]->modelid; ?>"><?php echo $products[$i]->name; ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <button class="dropdown-btn">Катера</button>
                    <div class="dropdown-container">
                        <?php for ($i = 0; $i <= count($products); $i++) : ?>
                            <?php if ($products[$i]->id != null) : ?>
                                <?php if ($products[$i]->modeltype == "boat") : ?>
                                    <a href="/product.php?id=<?php echo $products[$i]->modelid; ?>"><?php echo $products[$i]->name; ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <button class="dropdown-btn">Яхты</button>
                    <div class="dropdown-container">
                        <?php for ($i = 0; $i <= count($products); $i++) : ?>
                            <?php if ($products[$i]->id != null) : ?>
                                <?php if ($products[$i]->modeltype == "yacht") : ?>
                                    <a href="/product.php?id=<?php echo $products[$i]->modelid; ?>"><?php echo $products[$i]->name; ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <button class="dropdown-btn">Интстументы</button>
                    <div class="dropdown-container">
                        <?php for ($i = 0; $i <= count($products); $i++) : ?>
                            <?php if ($products[$i]->id != null) : ?>
                                <?php if ($products[$i]->modeltype == "instruments") : ?>
                                    <a href="/product.php?id=<?php echo $products[$i]->modelid; ?>"><?php echo $products[$i]->name; ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
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
                    <a href="#popup" class="mail-siderbar sidebar_mail-email">Написать нам</a>
                </div>
            </div>
            <div class="content">
                <div class="content-slider">
                    <div class="slider">
                        <!-- Первый слайд -->
                        <div class="item">
                            <div class="sladers">
                                <div class="slider_info">
                                    <h2 class="slider_logo">Электрический мини-вертолет Beacon</h2>
                                    <div class="laner"></div>
                                    <table>
                                        <tr class="slider_color">
                                            <td>Тип:</td>
                                            <td>Мини вертолет</td>

                                        </tr>
                                        <tr>
                                            <td>Шасси:</td>
                                            <td>Пластик</td>

                                        </tr>
                                        <tr class="slider_color">
                                            <td>Электродвигатели:</td>
                                            <td>180 размера (2шт)</td>

                                        </tr>
                                        <tr>
                                            <td>Время полета:</td>
                                            <td>10 - 12 минут</td>

                                        </tr>
                                    </table>
                                    <div class="laner"></div>
                                    <p class="price">Цена:<span class="price_namber">600</span>₴</p>
                                    <a class="btn" href="#">В корзину</a>
                                </div>
                                <img class="slider_img" src="/img/Slider/Helicopter_1.png" alt="Helicopter">
                            </div>
                        </div>
                        <div class="item">
                            <div class="sladers">
                                <div class="slider_info">
                                    <h2 class="slider_logo">Электрический мини-вертолет Beacon</h2>
                                    <div class="laner"></div>
                                    <table>
                                        <tr class="slider_color">
                                            <td>Тип:</td>
                                            <td>Мини вертолет</td>

                                        </tr>
                                        <tr>
                                            <td>Шасси:</td>
                                            <td>Пластик</td>

                                        </tr>
                                        <tr class="slider_color">
                                            <td>Электродвигатели:</td>
                                            <td>180 размера (1шт)</td>

                                        </tr>
                                        <tr>
                                            <td>Время полета:</td>
                                            <td>5 - 10 минут</td>

                                        </tr>
                                    </table>
                                    <div class="laner"></div>
                                    <p class="price">Цена:<span class="price_namber">100</span>₴</p>
                                    <a class="btn" href="#">В корзину</a>
                                </div>
                                <img class="slider_img" src="/img/Slider/5.png" alt="Helicopter">
                            </div>
                        </div>
                        <!-- Кнопки-стрелочки -->
                        <a class="previous" onclick="previousSlide()">&#10094;</a>
                        <a class="next" onclick="nextSlide()">&#10095;</a>
                    </div>
                </div>
                <div class="sale">
                    <h2 class="sale_title">Распродажа</h2>
                    <div class="sale_card">
                        <div class="card">
                            <img src="/img/Sale/img_1.png" alt="icon-catalog">
                            <a class="sale_btn" href="#">1000 ₴</a>
                            <h3 class="card_text">
                                <a class="cart_text-link" href="#">Машина для чемпионата мира CYCLONE D4</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="reviews">
                    <h2 class="reviews_logo-text">Последние обзоры</h2>
                    <div class="reviews_content">
                        <img class="reviews_img" src="/img/reviews.png" alt="reviews">
                        <p class="reviews_text">
                            <span class="reviews-color">Наша компания организовала тест на прочность и выносливость эктрическому мини-вертолету HM60#B</span>
                            Было приглашено около 30 человек, но зрителей собралось в разы больше.
                            Место проведения теста - площадь.
                            Зрители смотрели как на шоу, маневры и падения вертолета сопровождались возгласами,
                            вот вот и ходила бы волна по зрителям
                        </p>
                    </div>
                    <div class="reviews_content">
                        <img class="reviews_img" src="/img/reviews.png" alt="reviews">
                        <p class="reviews_text">
                            <span class="reviews-color">Наша компания организовала тест на прочность и выносливость эктрическому мини-вертолету HM60#B</span>
                            Было приглашено около 30 человек, но зрителей собралось в разы больше.
                            Место проведения теста - площадь.
                            Зрители смотрели как на шоу, маневры и падения вертолета сопровождались возгласами,
                            вот вот и ходила бы волна по зрителям
                        </p>
                    </div>
                </div>

                <div class="about_company">
                    <h2 class="about_company-logo">О компании</h2>
                    <p class="about_company-text">
                        История компании elwau.ua – один из примеров сочетания творческого подхода с чрезвычайной практичностью.
                        Знаменитая идея братьев Венинг – оснастить различные виды транспорта мобильными холодильниками – в 70-х годах прошлого века перешагнула стандарты инженерного мышления.
                        Что же до применения этой и множества других разработок – автохолодильники автокондиционеры, автопылесосы, автокофеварки elwau.ru – то здесь братья-изобретатели блестяще продемонстрировали свои организаторские таланты.
                    </p>
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
    <script src="/js/slider.js"></script>
    <script src="/js/popup.js"></script>
</body>

</html>