<html>
<head>
<title>@yield('title')</title>
@yield('link')

</head>
<body>
<div class="fonpolosa">
</div>
<div class="banner-top">
<div class="container">
<nav class="nav">
 <ul>
<li><a href="/index"></i>Главная</a></li>
<li><a href="/woman">Женская Одежда</a></li>
<li><a href="/child">Одежда для детей</a></li>
<li><a href="/dostavka">Оплата</a></li>
<li><a href="/korzina">Корзина</a></li>
<div class="wrapper">
<input type="checkbox" id="modal">
<label class="btn" for="modal"><a> Войти</a> </label>
<form action="" class="popup">
	<span><h1 class="Vhod"> Вход</h1></span><br>
	<h3 class="h21">Логин</h3><input class="bbt" type="text">
	<h3 class="h22">Пароль</h3><input class="bbt2" type="text">
	<button class="knopka2">Войти</button>
	<h5 class="h6">Регистрация</h5>
	<label class="close" for="modal"> + </label>
</form>
</div>
</ul>
</nav>

@yield('polosa')

</div>
</div>

@yield('tovar')

</body>
</html>
