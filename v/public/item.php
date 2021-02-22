<?php include_once "../controllers/Product.php"; ?>
<? include "../templates/menu.twig"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<title>order</title>
	<link rel="stylesheet" href="style/style.css">
</head>

<body>
	<!--
	<div class="top_order">
		<div class="container top_box">
			<ul class="header">
				<li><a href="index.php"><img src="img/logo.svg" alt="index"></a></li>
				<li><a href="contacts.php"><img src="img/contacts.svg" alt="contacts"></a></li>
			</ul>

		</div>
	</div>
-->

	<div class="what-we-do container">
		<div class="order">

			<?php
			$id = $_GET['id'];
			countViews($connect, $id, 'goods');
			$good = getOne($connect, $id, 'goods');
			?>

			<div class='goodsWrapItem'>
				<div class="top_item">
					<div class="wrapGoodImgItem">
						<a href="item.php?photo=<?= $good['bigPhoto'] ?>&id=<?= $good['id'] ?>"><img class='box_img' src="<?= $good['bigPhoto'] ?>"></a>
					</div>
					<div class="right_item">

						<div class='goodsParam'><span><b>Состав: </b></span><?= $good['param'] ?></div>
						<div class='goodsParam'><span><b>Вес: </b></span><?= $good['weight'] ?> гр./порцию</div>
						<?php if ($good['discount'] > 0) {
							echo ('<div class="stickerItem"><span class="stickerTextItem">' . $good['discount'] . '%</span><div class="explain">    блюдо со скидкой дня ' . $good['discount'] . '%</div></div>');
						};
						if ($good['stickerFit'] == 1) {
							echo ('<div class="stickerItem"><span class="stickerTextItem">Fit!</span> <div class="explain">     блюдо с низкой калорийностью</div></div>');
						};
						if ($good['stickerHit'] == 1) {
							echo ('<div class="stickerItem"><span class="stickerTextItem">Hit!</span><div class="explain">    популярное блюдо</div></div>');
						}; ?>
					</div>
				</div>

			</div>
			<div class="btnWrapItem">
				<input type='button' class='button btn' value='Дoбавить в корзину' onclick="addToBasket(<?= $good['id'] ?>)" data-id='<?= $good['id'] ?>'>
				<input type='button' class='button btn' value='Удалить из корзины' onclick="deleteToBasket(<?= $good['id'] ?>)" data-id='<?= $good['id'] ?>'>
			</div>
		</div>

	</div>
	</div>
	</div>
	</div>


	</div>
	<div class="footer">
		<div class="container footer_con">
			<div class="footer_top">
				<div>
					<h1 class=" footer_heading">
						Interested to work with out team?</h1>
					<p class="footer_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
				<a class="footer_button" href="#">Let’s Talk</a>
			</div>
		</div>
		<hr>
		<div class="container footer_con">
			<div class="footer_bottom">
				<ul class="footer_info">
					<li class="footer_list"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					<li class="footer_list footer_list2">+7-812-7313-4321</li>
					<li class="footer_list footer_list3">hello.site@gmail.com</li>
				</ul>

				<p class="prava">2020 All rights reserved.</p>
			</div>
		</div>
	</div>
</body>

</html>