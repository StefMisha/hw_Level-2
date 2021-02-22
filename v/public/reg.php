<?php include_once "../controllers/User.php";
include "../templates/menu.twig";  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Вход на сайт</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css" type="text/css" media="all">
</head>

<body>
    <div id="container">


        <div class="card-l">
            <div class="card-reg">
                <h1>Регистрация на сайте</h1>
                <hr>
                <?
        if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
            echo "Вы уже вошли";
        } else {
            echo $message ? $message : ""; ?>
                <form method="post">
                    <p class="form_text_log">Имя <input class="inpCon" type="text" name="name" maxlength="30" placeholder="Введите Имя" autofocus required></p>
                    <p class="form_text_log">Логин <input class="inpCon" type="text" name="login" maxlength="30" placeholder="Введите Логин" required></p>
                    <p class="form_text_log">Email <input class="inpCon" type="email" name="email" maxlength="30" placeholder="Введите Email" required></p>
                    <p class="form_text_log">Пароль <input class="inpCon" type="password" minlength="2" name="pass" placeholder="Введите Пароль" required></p>
                    <input class="button-log" type="submit" name="submit" value="Зарегистрироваться">
                </form>
                <? } ?>
            </div>
        </div>
        <footer>
            <? include "../templates/footer.twig"; ?>
        </footer>
    </div>
    <script src='../js/my.js' defer></script>;
</body>

</html>