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
  @if (!Auth::check())
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
@else
  <a href="/logout"> Выход </a>
@endif
</div>
</ul>
</nav>

@yield('polosa')

</div>
</div>

@yield('tovar')

</body>
</html>
