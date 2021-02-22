<?php include_once "../controllers/Product.php"; ?>
<? include "../templates/menu.twig"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Pattern</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div class=" top">
        <div class="container top_box">
            <div class="top_info">
                <h1 class="top_heading">New Automation Tool for Your</h1>
                <p class="text top_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum minus iste
                    pariatur
                    tempore doloremque
                    ipsum blanditiis aliquid earum eligendi, quaerat vel odio qui laborum? A facilis ab fugiat explicabo
                    ratione.</p>
                <a href="#" class="top_button">See Our Project</a>
            </div>
        </div>
    </div>
    <div class="what-we-do container">
        <h3 class="heading">What we do to help our client grow in digital era</h3>
        <div class="flex">
            <div class="card-box">
                <?php
                if (isset($goods))
                    foreach ($goods as $good) : ?>
                    <div class='card'>
                        <div class="wrapGoodImg">

                            <a href="item.php?photo=<?= $good['bigPhoto'] ?>&id=<?= $good['id'] ?>"><img class='box_img' src="<?= $good['miniPhoto'] ?>"></a>
                        </div>
                        <div class="wrapGoodInfo">
                            <div class='heading_mini_form'><?= $good['nameFull']; ?></div>
                            <div class='goodsPrice'><?= $good['price'] ?><b>&#8381;</b></div>
                            <div class='goodsParam'><span><b>Состав: </b></span><?= $good['param'] ?></div>
                        </div>
                        <div class="btnWrap">
                            <input type='button' class='button btn' value='Дoбавить в корзину' onclick="addToBasket(<?= $good['id'] ?>)" data-id='<?= $good['id'] ?>'>
                            <input type='button' class='button btn' value='Удалить из корзины' onclick="deleteToBasket(<?= $good['id'] ?>)" data-id='<?= $good['id'] ?>'>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="project container">
        <img class="" src="" alt=" ">
    </div>
    <footer>
        <? include "../templates/footer.twig"; ?>
    </footer>
    <script src='../js/my.js' defer></script>
</body>

</html>