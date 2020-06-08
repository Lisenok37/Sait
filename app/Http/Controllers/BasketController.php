<?php

namespace App\Http\Controllers;

use App\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
  /**
  * Выводит данные из таблицы baskets
  */
  public function show()
  {
     return Basket::all();
  }
}
