<html>
<head>
	<title>Интернет- мазагин Women's clothing</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="fonpolosa">
</div>
<div class="banner-top">
<div class="container">
<nav class="nav">
 <ul class="ul">
	<li><a href="/index"></i>Главная</a></li>
	<li><a href="/woman">Женская Одежда</a></li>
	<li><a href="/child">Одежда для детей</a></li>
	<li><a href="/dostavka">Оплата</a></li>
	<li><a href="/korzina">Корзина</a></li>
	<div class="wrapper">
	<input type="checkbox" id="modal">
	<label class="btn" for="modal"><a> Войти</a> </label>
	<form method="get "action="/auth" class="popup">
		<span><h1 class="Vhod"> Вход</h1></span><br>
		<h3 class="h21">Логин</h3><input name="login" class="bbt" type="text">
		<h3 class="h22">Пароль</h3><input name="password" class="bbt2" type="text">
		<input type="submit" class="knopka2" style="height: 40px; width: 150px; margin-top: 15px; font-family: 'Lato-Regular'; border-radius: 10px; margin-bottom: 8px;font-size: 20px;" value="Войти">
		<h5><a href="/register" style="border: none; background: none;	color: black;	font-size: 18px;"> Регистрация</a></h5>
		<label class="close" for="modal"> + </label>
	</form>
	</div>
</ul>
</nav>
</div>
</div>
<div class="banner">
<div class="container">
<div class="banner-bottom">
<div class="banner-bottom-right">
<div class="banner-info">
	<h3>Women's clothing</h3>
	<p>Начни покупать здесь.</p>
</div>
</div>
</div>
</div>
<div class="kollect">
	<a href="#kollect">Коллекция Магазина</a>
</div>
</div>
<div class="pictovar">
	<h3 class="head text-center" id="kollect">Актуальные товары</h3>
</header>
</div>
<section class="tovar">
	<div class="polozenie">
		  @foreach($Products as $Product)
		<article>
			<a  class="image"><img src="{{$Product -> img_url}}" alt="" /></a>
			<header>
			<div style="height: 100px; margin-bottom: 5; width: 360; font-family: 'Lato-Regular'; font-size: 19px;">
	      	{{$Product->description}}
	      </div>
			<h3><a href="#">{{$Product -> title}}</a></h3>
		      </header>
		      <p>Цена: {{$Product -> price}}$</p>
			<button class="knopka">Избранное</button>
			<button class="knopka">В корзину</button>
		</article>
		@endforeach
	</div>
</section>
</body>
</html>s
