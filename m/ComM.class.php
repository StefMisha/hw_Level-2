<?php


class ComM {

    public function WriteCom($fio, $email, $text) {

            $object = [
                'fio' => $fio,
                'email' => $email,
                'text' => $text
            ];

        PdoM::Instance() -> Insert('comment', $object);

        header("Location: ".$_SERVER["HTTP_REFERER"]);
        if (is_numeric($res)) {
            return 'Коммент добавлен, типа как не авторизованного, просто нет еще закрепления за авторизованным пользователем
<a href="index.php?class=user&method=login">личный кабинет</a>';
        } else {
            return "Регистрация прервалась ошибкой.";
        }
    }
}