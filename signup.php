<?php
        require 'db.php';
        $data = $_POST;
        $showErrorSignin = False;
        $showErrorSignup = False;


        if (isset($data['signup'])) {
            $errorSignup = array();

            if (trim($data['registerUserPassword']) != trim($data['repeatregisterUserPassword'])) {
                $errorSignup[] = 'Пароли не совпадают';
            }
            if (R::count('users', 'email = ?', array($data['email'])) > 0) {
                $errorSignup[] = 'Пользователь с таким email существует';
            }
            if (R::count('users', 'phone = ?', array($data['phone'])) > 0) {
                $errorSignup[] = 'Пользователь с таким номером телефона существует';
            }
            if (empty($errorSignup)) {
                $user = R::dispense('users');
                $user->firstName = $data['firstName'];
                $user->lastName = $data['lastName'];
                $user->email = $data['email'];
                $user->phone = $data['phone'];
                $user->pass = password_hash($data['registerUserPassword'], PASSWORD_DEFAULT);
                R::store($user);
                $_SESSION['user'] = $user;
                header("Location: /");
            } else {
                $showErrorSignup = True;
            }
        }
        if (isset($data['signin'])) {
            $errorSignin = array();

            $user = R::findOne('users', 'email = ?', array($data['email']));
            if ($user) {
                if (password_verify($data['pass_signin'], $user->pass)) {
                    $_SESSION['user'] = $user;
                    header("Location: /");
                } else {
                    $errorSignin[] = "Неверный пароль";
                    $showErrorSignin = True;
                }
            } else {
                $errorSignin[] = "Неверный email";
                $showErrorSignin = True;
            }
        }

        ?>

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
            <form action="/signup.php" method="post" class="form form_sagnin">
                <h3 class="form-title">Вход</h3>
                <p>
                    <input type="mail" class="form_input" name="email" data-reg="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$" placeholder="email" required>
                    <label for="email">В формате: elwau@gmail.com</label>
                </p>
                <p>
                    <input type="password" class="form_input" name="pass_signin" placeholder="Пароль" required>
                </p>
                <p>
                    <button type="submit" name="signin" class="form_btn form_btn-voyti">Войти</button>
                </p>
                <p>
                    <?php if ($showErrorSignin) {
                                echo showError($errorSignin);
                            } ?> 
                </p>
                <p>
                    <a href="#" class="form_forgot">Восстановить пароль</a>
                </p>
            </form>
            <!-- форма регистрации -->
            <form action="/signup.php" method="post" class="form form_sagnun" id="registration" name="registration">
                <h3 class="form-title">Зарегистрироваться</h3>
                <p>
                    <input type="text" class="form_input" id="name" name="firstName" pattern="^[А-ЯЁ][а-яё]*$" title="Введите правильный имя в указоному формате: Только русские буквы" placeholder="Имя" required>
                    <label for="name">Только русские буквы</label>
                </p>
                <p>
                    <input type="text" class="form_input" id="surname" name="lastName" pattern="^[А-ЯЁ][а-яё]*$" title="Введите правильну Фамилию в указоному формате: Только русские буквы" placeholder="Фамилия" required>
                    <label for="surname">Только русские буквы</label>
                </p>
                <p>
                    <input type="mail" class="form_input" id="email" name="email" pattern="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$" title="введите правильный email в указоному формате: elwau@gmail.com" placeholder="email" required>
                    <label for="email">В формате: elwau@gmail.com</label>
                </p>
                <p>
                    <input type="text" class="form_input" id="phone" name="phone" pattern="^\+380\d{9}$" title="введите правильный пароль в указоному формате: +380999999999" placeholder="Телефон" required>
                    <label for="email">В формате: +380999999999</label>
                </p>
                <p>
                    <input type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="введите правильный пароль в указоному формате: (дожно быть (строчные и прописные латинские буквы, цифры) не больше 8 символов)" class="form_input registerUserPassword" id="registerUserPassword" name="registerUserPassword" placeholder="Пароль" required>
                    <label for="registerUserPassword" class="label">дожно быть (строчные и прописные латинские буквы, цифры) не больше 8 символов</label>
                </p>
                <p>
                    <input type="password" class="form_input repeatregisterUserPassword" id="repeatregisterUserPassword" name="repeatregisterUserPassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Повторите правильный пароль" placeholder="Повторите пароль" required>
                </p>
                <p>
                    <button type="submit" class="form_btn form_btn-signup" id="button" name="signup">Зарегистрироваться</button>
                </p>
                <p>
                    <?php if ($showErrorSignup) {
                                echo showError($errorSignup);
                            } ?> 
                </p>
            </form>
        </div>
    </article>

    <script src="js/signup.js"></script>
</body>

</html>