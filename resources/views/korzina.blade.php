@extends('layouts.head')

@section('link')
<link href="css/style — korzina.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('title')
    Корзина - Women's clothing
@endsection


@section('tovar')
<div style="width: 1952px;" id="tovar">

<div class="banner">
<hr>
<h1 class="nad"> Корзина </h1>
<hr>
	<div class="tovar"><h6 class="tovar-k">Блузка из смесового шелка </h6>
		<h5 class="tovar-opicanie2"> Количество: 1 x 800$ <button class="knopka4">+</button> </h5>
		<h5 class="tovar-opicanie"> <b><u>Описание:</b></u><br><br>  Широкая блузка из шелка и Tencel - лиоцелла с декоративными сборками по вырезу горловины и в плечевых швах. Треугольный вырез с завязками сверху, заниженная линия плеча, длинные рукава со складками для дополнительного объема с широкими манжетами на пуговицах.	</h5>
		<img class="image" src="images/pic04.jpg" alt="" />

		<button class="knopka3">Убрать из корзины</button>
		<h5 class="tovar-opicanie3"> <b><u> Итого: 800$</b></u> </h5>
	</div>
	<div class="tovar"><h6 class="tovar-k">Шарф с большую клетку </h6>
		<h5 class="tovar-opicanie2"> Количество: 1 x 800$ <button class="knopka4">+</button> </h5>
		<h5 class="tovar-opicanie"> <b><u>Описание:</b></u><br><br>  Большой шарф с рисунком из мягкой ткани с бахромой на концах.	</h5>
		<img class="image2" src="images/pic31.jpg" alt="" />

		<button class="knopka3">Убрать из корзины</button>
		<h5 class="tovar-opicanie3"> <b><u> Итого: 800$</b></u> </h5>
	</div>
	<div>
		<button class="knopka5">К оформлению</button>
		<h5 class="tovar-opicanie4"> <b><u> Конечная сумма</b></u> : 1600$ </h5>
	</div>
<div class="container">
<div class="banner-bottom">
<div class="banner-bottom-right">
<div class="banner-info">
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
