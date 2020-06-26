<html>
<head>
<title> @yield('title') </title>

 @yield('link')

</head>
<body>
  @yield('fonpolosa')

<div class="banner-top">

<div class="container">
<nav class="nav">
 <ul>
<li><a href="/index"></i>Главная</a></li>
<li><a href="/woman">Женская Одежда</a></li>
<li><a href="/child">Одежда для детей</a></li>
<li><a href="/dostavka">Оплата</a></li>
<li><a href="/korzina">Корзина</a></li>
<li><a href="/index">Войти</a></li>

</div>
</ul>
</nav>

@yield('polosa')

</div>
</div>

@yield('tovar')

</body>
</html>
