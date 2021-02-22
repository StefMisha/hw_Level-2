<?php include_once "../controllers/Comment.php"; ?>
<? include "../templates/menu.twig"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>

<body>
    <div class=" top_con">
        <div class="top_info_con">
            <h2 class="top_heading_con">Contact Us</h2>
            <p class="text_con">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>

        </div>
    </div>
    <div class="container ">

        <div class="can-box">
            <div class="box-1">
                <img class="box_img_con" src="img/box-1.svg" alt="box-1">
                <h4 class="heading_mini_con">ADDRESS</h4>
                <p class="text_box">Id convallis placerat sit sed duis id amet volutpat quam a, pharetra.</p>
                <h4 class="heading_mini_con">PHONE</h4>
                <div>
                    <div class="in_box">
                        <img src="img/mob.svg" alt="mob">
                        <p class="text_box">+7-812-7313-4321</p>
                    </div>
                    <div class="in_box">
                        <img src="img/mob.svg" alt="mob">
                        <p class="text_box">+7-817-0000-1234</p>
                    </div>
                </div>
                <h4 class="heading_mini_con">ONLINE SERVICE</h4>
                <div>
                    <div class="in_box">
                        <img src="img/site.svg" alt="mob">
                        <p class="text_box">www.site.com</p>
                    </div>
                    <div class="in_box">
                        <img src="img/mail.svg" alt="mob">
                        <p class="text_box">hello.site@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <h4 class="heading_mini_form">SEND US MESSAGE</h4>
                <div class="form">
                    <form method="post">
                        <p class="form_text">Full Name</p> <input class="inpCon" type="text" name="fio" maxlength="50" required placeholder="Your Name">
                        <p class="form_text">Email</p> <input class="inpCon" type="email" name="email" maxlength="20" required placeholder="Your Email">
                        <p class="form_text">Message</p> <textarea name="text" rows="10" required class="inpConM" placeholder="Your Message"></textarea>
                        <input class="sub" type="submit" name="submit">
                    </form>
                </div>

            </div>

        </div>
        <h1 class="heading">Ваши сообщения</h1>
        <div class="messege">
            <?php
            if ($comments) {
                foreach ($comments as $comment) {
                    echo "<div class = \"com\";'>ФИО: {$comment['fio']}<br>Email: {$comment['email']}<br>Текст: {$comment['text']}<br><i>Дата: {$comment['date']}</i></div>";
                }
            }
            ?>

        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.6717271789194!2d37.671770751765166!3d55.764204580461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a84dfa70a63%3A0x6eb035932bd3dcaa!2z0JTQvtCx0YDQvtGB0LvQvtCx0L7QtNGB0LrQsNGPINGD0LsuLCAxNi0yNCwg0JzQvtGB0LrQstCwLCAxMDUwMDU!5e0!3m2!1sru!2sru!4v1601204926445!5m2!1sru!2sru" width="100%" height="480px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <footer>
        <? include "../templates/footer.twig"; ?>
    </footer>
    <script src='../js/my.js' defer></script>;
</body>

</html>