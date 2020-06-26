@extends('layouts.header')


@section('title')
Женская одежда - Women's clothing
@endsection

@section('link')
<link href="css/style — woman.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('fonpolosa')
<div class="fonpolosa">
</div>
@endsection

@section('tovar')
<div id="tovar">
  <div class="fonpolosa2">
  </div>
<section class="tovar">
  <div class="banner">
  </div>
<div class="polozenie">
<div class="pictovar">
  <h3 class="head text-center">Актуальные товары</h3>
  </header>
  </div>
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

  <div class="pictovar">
  <h3 class="head text-center">Деловой стиль</h3>
  </header>
  </div>

  @foreach($Products as $Product)
  <article2>
  <a  class="image"><img src="images/pic10.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Костюм Genyr </a></h3>
  </header>
  <p>Цена: 3200$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  @endforeach

  <article2>
  <a  class="image"><img src="images/pic11.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#"> Пиджак Hape</a></h3>
  </header>
  <p>Цена: 1800$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic12.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Костюм Glory</a></h3>
  </header>
  <p>Цена: 3800$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic13.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Костюм Genyr</a></h3>
  </header>
  <p>Цена: 2100$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic14.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Костюм тройка Hape </a></h3>
  </header>
  <p>Цена: 4100$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic15.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Костюм Glory</a></h3>
  </header>
  <p>Цена: 2400$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic16.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Пиджак Glory</a></h3>
  </header>
  <p>Цена: 1500$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic17.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Блузка Hape</a></h3>
  </header>
  <p>Цена: 900$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  </div>
  </section>
  <section class="tovar">
  <div class="polozenie">
  <div class="pictovar">
  <h3 class="head text-center">Спортивный стиль</h3>
  </header>
  </div>
  <article>
  <a  class="image"><img src="images/pic18.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Спортивный костюм Armany </a></h3>
  </header>
  <p>Цена: 3100$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article>
  <article>
  <a  class="image"><img src="images/pic19.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Спортивный костюм H&P</a></h3>
  </header>
  <p>Цена: 2800$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article>
  <article>
  <a  class="image"><img src="images/pic20.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Спортивный костюм Jely</a></h3>
  </header>
  <p>Цена: 1300$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article>
  <article2>
  <a  class="image"><img src="images/pic21.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Шорты Diamond</a></h3>
  </header>
  <p>Цена: 400$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic22.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Спортивный костюм Winds</a></h3>
  </header>
  <p>Цена: 1200$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic23.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Спортивный костюм тройка H&P</a></h3>
  </header>
  <p>Цена: 3200$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic24.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Спортивный костюм Jely</a></h3>
  </header>
  <p>Цена: 2300$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic25.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Спортивный комплект Diamond</a></h3>
  </header>
  <p>Цена: 1800$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <div class="pictovar">
  <h3 class="head text-center">Аксесуары</h3>
  </header>
  </div>
  <article2>
  <a  class="image"><img src="images/pic26.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Тройка Armany</a></h3>
  </header>
  <p>Цена: 2400$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic27.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Серьги Woods</a></h3>
  </header>
  <p>Цена: 1100$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic28.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Сумка Lover</a></h3>
  </header>
  <p>Цена: 3200$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic29.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Часы Nice</a></h3>
  </header>
  <p>Цена: 1500$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic30.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Ожерелье Tropic </a></h3>
  </header>
  <p>Цена: 1400$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic31.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Шарф H&P</a></h3>
  </header>
  <p>Цена: 800$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic32.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Ободок Diamond</a></h3>
  </header>
  <p>Цена: 500$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  <article2>
  <a  class="image"><img src="images/pic33.jpg" alt="" /></a>
  <header>
  <div class="Opisanie">
  	Описание
  </div>
  <h3><a href="#">Часы Diamond</a></h3>
  </header>
  <p>Цена: 1300$</p>
  <button class="knopka">Избранное</button>
  <button class="knopka">В корзину</button>
  </article2>
  </div>
  </section>
</div>
@endsection
