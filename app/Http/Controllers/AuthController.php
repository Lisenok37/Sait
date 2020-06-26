<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

  /**
  *@param Request $request
  *@return mixed
  */
    public fubction auth(Request $request)
    {
      $user = User::where([['login',$request->login],['password',$request->password]])-> first();
      if(is_null($user)){
        return "Неверный логин или пароль";
            }
            Auth::login($user);
            return back()->withInput();
    }

    public function_logout(Request $request)
    {
      Auth::logout();
       return back()->withInput();
    }
}
