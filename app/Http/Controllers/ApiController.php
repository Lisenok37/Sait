<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction(Request $request)
    {
      return view('index');
    }

    public function womanAction(Request $request)
    {
      return view('woman');
    }

    public function childAction(Request $request)
    {
      return view('child');
    }

    public function dostavkaAction(Request $request)
    {
      return view('dostavka');
    }

    public function korzinaAction(Request $request)
    {
      return view('korzina');
    }
    public function getBaskets(Request $request)
    {
      return (new BasketController())->show();
    }
    public function getProducts(Request $request)
    {
      return (new ProductController())->show();
    }
}
