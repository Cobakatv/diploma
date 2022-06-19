<?php
require 'db.php';
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
$db_products = R::findAll('Models');
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
    <link rel="stylesheet" href="/css/basket.css">
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
                            <!-- <?php if ($user) : ?> -->
                            <!-- <a class="header-ak" href="#">Здравствуйте, <?php echo $user->firstName; ?></a> -->
                            <a class="header-ak" href="/logout.php">Выйти</a>
                            <!-- <?php else : ?> -->
                            <a class="header-ak" href="signup.php">Войти в личный кабинет</a>
                            <!-- <?php endif; ?> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <mail class="mail">
        <div class="container">
            <h1 class="page-title">Корзина</h1>
            <div class="basket-content">
                <div class="basket-mail">
                    <table class="backet-table">
                        <thead>
                            <tr>
                                <th>Картинка</th>
                                <th>Имя</th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th>Сумма</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="basket-table_img">
                                    <img class="table-img" src="/img/Catalog/1.png" alt="basket">
                                </td>
                                <td class="basket-table_title">
                                    <a href="#">Машина для чемпионата мира CYCLONE D4</a>
                                </td>
                                <td class="basket-table_price">
                                    <span>10000</span>
                                </td>
                                <td class="basket-count">
                                    <div class="basket-minus">
                                        <button class="conter-basked" data-action="minus">-</button>
                                    </div>
                                    <div class="basket-count_input">
                                        <input class="conter-basked_input" type="text" value="1" data-counter>
                                    </div>
                                    <div class="basket-plus">
                                        <span class="count-plus">
                                            <button class="conter-basked" data-action="plus">+</button>
                                        </span>
                                    </div>
                                </td>
                                <td class="basket-table_total">
                                    <span>10000</span>
                                </td>
                                <td class="basket-table_remove">
                                    <span data-remove value="remove">&times;</span>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="basket-table_img">
                                    <img class="table-img" src="/img/Catalog/1.png" alt="basket">
                                </td>
                                <td class="basket-table_title">
                                    <a href="#">Машина для чемпионата мира CYCLONE D4</a>
                                </td>
                                <td class="basket-table_price">
                                    <span>10000</span>
                                </td>
                                <td class="basket-count">
                                    <div class="basket-minus">
                                        <button class="conter-basked" data-action="minus">-</button>
                                    </div>
                                    <div class="basket-count_input">
                                        <input class="conter-basked_input" type="text" value="1" data-counter>
                                    </div>
                                    <div class="basket-plus">
                                        <span class="count-plus">
                                            <button class="conter-basked" data-action="plus">+</button>
                                        </span>
                                    </div>
                                </td>
                                <td class="basket-table_total">
                                    <span>10000</span>
                                </td>
                                <td class="basket-table_remove">
                                    <span data-remove value="remove">&times;</span>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="basket-table_img">
                                    <img class="table-img" src="/img/Catalog/1.png" alt="basket">
                                </td>
                                <td class="basket-table_title">
                                    <a href="#">Машина для чемпионата мира CYCLONE D4</a>
                                </td>
                                <td class="basket-table_price">
                                    <span>10000</span>
                                </td>
                                <td class="basket-count">
                                    <div class="basket-minus">
                                        <button class="conter-basked" data-action="minus">-</button>
                                    </div>
                                    <div class="basket-count_input">
                                        <input class="conter-basked_input" type="text" value="1" data-counter>
                                    </div>
                                    <div class="basket-plus">
                                        <span class="count-plus">
                                            <button class="conter-basked" data-action="plus">+</button>
                                        </span>
                                    </div>
                                </td>
                                <td class="basket-table_total">
                                    <span>10000</span>
                                </td>
                                <td class="basket-table_remove">
                                    <span data-remove value="remove">&times;</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="basket-aside">
                    <h2 class="basket-aside_title">Оформление заказа</h2>
                    <div class="basket-aside_forms">
                        <p>
                            <input type="text" class="form_input" id="name" name="firstName" pattern="^[А-ЯЁ][а-яё]*$" title="Введите правильный имя в указоному формате: Только русские буквы" placeholder="Имя" required>
                        </p>
                        <p>
                            <input type="mail" class="form_input" id="email" name="email" pattern="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$" title="введите правильный email в указоному формате: elwau@gmail.com" placeholder="email" required>
                        </p>
                        <p>
                            <input type="text" class="form_input" id="phone" name="phone" pattern="^\+380\d{9}$" title="введите правильный пароль в указоному формате: +380999999999" placeholder="Телефон" required>
                        </p>
                        <p>
                            <button type="submit" class="form_btn basket-button" id="button" name="signup">Отправить заказ</button>
                        </p>
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
    <script src="/js/basket.js"></script>

</body>

</html>