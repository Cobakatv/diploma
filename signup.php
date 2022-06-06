<!DOCTYPE html>
<html lang="en">

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

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>Регистрация/Вход</title>
</head>

<body>
    <article class="container">
        <div class="blok">
            <section class="block_item block-item">
                <h2 class="block-item__title">У вас есть аккаунт?</h2>
                <button class="block-item__btn signin-btn">Войти</button>
            </section>
            <section class="block_item block-item">
                <h2 class="block-item__title">У вас нету аккаунта?</h2>
                <button class="block-item__btn signup-btn">Зарегистрироваться</button>
            </section>
        </div>
        <div class="form-box">
            <!-- форма входа -->
            <form action="#" class="form form_sagnin">
                <h3 class="form-title">Вход</h3>
                <p>
                    <input type="email" class="form_input" placeholder="email" required>
                </p>
                <p>
                    <input type="password" class="form_input" placeholder="Пароль" required>
                </p>
                <p>
                    <button class="form_btn">Войти</button>
                </p>
                <p>
                    <a href="#" class="form_forgot">Восстановить пароль</a>
                </p>
            </form>
            <!-- форма регистрации -->
            <form action="#" class="form form_sagnun">
                <h3 class="form-title">Зарегистрироваться</h3>
                <p>
                    <input type="text" class="form_input" placeholder="Имя" required>
                </p>
                <p>
                    <input type="text" class="form_input" placeholder="Фамилия" required>
                </p>
                <p>
                    <input type="mail" class="form_input" placeholder="email" required>
                </p>
                <p>
                    <input type="password" class="form_input" placeholder="Пароль" required>
                </p>
                <p>
                    <input type="password" class="form_input" placeholder="Повторите пароль" required>
                </p>
                <p>
                    <button class="form_btn form_btn-signup">Зарегистрироваться</button>
                </p>
            </form>
        </div>
    </article>


    <script src="js/signup.js"></script>
</body>

</html>