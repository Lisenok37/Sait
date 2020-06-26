<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction(Request $request)
    {
      return view('index',['Products' => (new ProductController())->show()]);
    }

    public function womanAction(Request $request)
    {
      return view('woman',['Products' => (new ProductController())->show()]);
    }

    public function childAction(Request $request)
    {
      return view('child',['Products' => (new ProductController())->show()]);
    }

    public function dostavkaAction(Request $request)
    {
      return view('dostavka');
    }

    public function korzinaAction(Request $request)
    {
      return view('korzina');
    }
    public function registerAction(Request $request)
    {
      return view('register');
    }
    public function getBaskets(Request $request)
    {
      return (new BasketController())->show();
    }
    public function getProducts(Request $request)
    {
      return (new ProductController())->show();
    }
    public function auth(Request $request)
    {
      dump($request->login);
      dump($request->password);
      return back()->withInput();
    }
}
