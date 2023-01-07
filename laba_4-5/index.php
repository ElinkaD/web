<?php  

$xml = simplexml_load_file("data.xml");

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Интернет-магазин Flora&Fauna</title>
	<link rel="stylesheet" href="css/style.css" />
	<meta charset="UTF-8" />
	<meta name="n=viewport" content="width=device-width" />
	<style>
		.item p{
			margin: 20px 10px;
		}
	</style>
</head>


<body>
	<div class="head">
		<div class="logo">
		</div>
		<div class="points">
			<div class="search">
				<div class="search_bar">
					<form>
						<p><input type="search" class="stroka" placeholder="Поиск по сайту">
						<input type="submit" class="search_but" value="Поиск"></p>
					</form>
				</div>
				<div class="login"><a href="http://localhost/laba_4/login.php"><img src="img/icon.svg" alt=""></a></div>
			</div>
			<div class="menu">
				<div class="main">
					<p><a href="http://localhost/laba_4/index.php">Главная</a></p>
				</div>
				<div class="katalog">
					<p> Каталог</p>					
				</div>
				<div class="delivery">
					<p><a href="#d1">Доставка</a></p>
				</div>
				<div class="cont">
					<p><a href="#c1">Контакты</a></p>
				</div>
				<div class="signs">
					<p>Корзина</p>
				</div>
			</div>
		</div>
	</div>
	<div class="photos">
		<img src="img/flora1.jpeg" alt="Акции">
	</div>
	<div class="main_body">
		<div class="left">
			<div class="catagory">
				<p>Категория</p>
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="filter">
				<p>Фильтр</p>
				<span> Цена от <input type="number" size="5">
				до <input type="number" size="5"></span>
				<ul>
					<li>бренд</li>
					<li>цвет</li>
					<li>материал</li>
					<li>другое</li>
				</ul>
			</div>
		</div>
		<div class="right">

			<?php foreach($xml->product as $product) { ?>
				<div class="item">
					<img src=" <?php echo $product->img ?> " alt="">
					<p><?php echo $product->name ?></p>
					<p> <?php echo $product->price ?></p>
					<button>Купить</button>
				</div>
			<?php } ?>

		</div>
		<div class="methods_delivery" id="d1">
			<div><h3>Способы доставки</h3></div>
			<div class="del">
				<div class="samo">
					<h4>Самовывоз</h4>
					<p>Вы можете забрать самостоятельно из наших магазинов по адресу: г. Санкт-Петербург, ул. Стремянная, д 13 г. Санкт-Петербург, пр. Энгельса, д 96 в любое удобное для Вас время.</p>
					<br>
					<p>Предварительно необходимо оформить заказ на сайте или по телефону</p>
				</div>
				<div class="delivery">
					<h4>Доставка курьером</h4>
					<p>Наши курьеры доставят выбранный вами товар до двери. Совершая заказ на сайте по телефону укажите данный способ доставки и выберите нужное вам время. </p>
					<br>
					<p>Внимание! Заказ долже быть совершен не позднее, чем за 24 часа до выбранного времени доставки</p>
				</div>
			</div>
		</div>
		<div class="contacts" id="c1">
			<h5>Контактная информация </h5>
			<div class="phone">
				<p> телефон: <br> 
				<br> +7 800 555 35 35 <br> 
				<br>адресс: <br> 
				<br> г. Санкт-Петербург,  ул. Стремянная, д 13</p>
			</div>
			<div class="time_work">
				<p>режим работы: <br>
				<br> call-центр: <br> ежедневно 24 часа <br>
				<br> магазины: <br> ежедневно с 10:00 до 18:00</p>
			</div>
			<div class="mail">
				<p>почта: <br>
				<br> pochta@yandex.ru <br>
				<br> ищите нас в соц.сетях:</p>
			</div>
		</div>
	</div>
</body>

</html>