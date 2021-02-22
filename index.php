<?php

    require_once 'autoload.php';

    $method = (isset($_GET['method'])) ? $_GET['method'] : 'index'; 

    if (isset($_GET['class'])) {
        if ($_GET['class'] === 'page') {
            $controller = new PageC();
        } elseif ($_GET['class'] === 'user') {
            $controller = new UserC();
        } elseif ($_GET['class'] === 'cart') {
            $controller = new CartC();
        } elseif ($_GET['class'] === 'com') { // данный элемент утерял свою силу, тк весь класс перешел в cpage
            $controller = new ComC();
        }

    } else {
        $controller = new PageC();
    }

    $controller -> request($method);

