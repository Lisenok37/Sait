@extends('layouts.header')

@section('title')
Одежда для детей - Women's clothing
@endsection

@section('link')
<link href="css/style — woman.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('fonpolosa')
<div class="fonpolosa">
</div>
@endsection

@section('tovar')
<div id="tovar" style="margin-top: -627px;">
  <div class="fonpolosa2">
  </div>
<section class="tovar">
  <div class="banner2">
  </div>
<div class="polozenie">
<div class="pictovar">
  <h3 class="head text-center">Ребенок</h3>
  </header>
  </div>
  @foreach($Products as $Product)
  @if ($Product->status == 5 )
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
  @endif
  @endforeach

  <div class="pictovar">
  <h3 class="head text-center">Девочка </h3>
  </header>
  </div>

  @foreach($Products as $Product)
  @if ($Product->status == 6 )
  <article2>
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
  </article2>
  @endif
  @endforeach

  <div class="pictovar">
  <h3 class="head text-center">Девушка</h3>
  </header>
  </div>

  @foreach($Products as $Product)
  @if ($Product->status == 7 )
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
  @endif
  @endforeach

  </div>
  </section>
</div>
@endsection
