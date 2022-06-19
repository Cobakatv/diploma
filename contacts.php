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
    <link rel="stylesheet" href="/css/contacts.css">
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
                    <a href="#popup" class="mail-siderbar sidebar_mail-email">Написать нам</a>
                </div>
            </div>
            <div class="content">
                <div class="contact">
                    <div class="">
                        <h3 class="contact-title">Как нас найти?</h3>
                        <p class="contact-text">Адрес нашей компании: <strong>ул. Академика Проскуры, 10</strong></p>
                        <p class="contact-text">Телефоны нашей компании:
                            <span class="contacts-color"><a class="contact-tell" href="tel:380981927420">+(380) 98-192-74-20</a>,<a class="contact-tell" href="tel:380971256912">+(380) 97-125-69-12</a></span>
                        </p>
                    </div>
                    <div class="return">
                        <h3 class="contact-title">Пункты самовывоза и возврата?</h3>
                        <p class="contact-text">Вернуть товар можно в сервисных отделах или в пунктах приема возвратов.</p>
                        <p class="contact-text">Пункты приема возвратов не имеют сервисных специалистов. Окончательное решение по возврату товара будет принято после осмотра товара специалистом сервиса.</p>
                        <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2349.577881162745!2d36.28525386296048!3d50.04447023359722!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a6e2ef582b59%3A0x1f4a90274bfcd858!2z0YPQuy4g0JDQutCw0LTQtdC80LjQutCwINCf0YDQvtGB0LrRg9GA0YssIDEwLCDQpdCw0YDRjNC60L7Qsiwg0KXQsNGA0YzQutC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjEwMDA!5e0!3m2!1sru!2sua!4v1654525451196!5m2!1sru!2sua" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</body>

</html>