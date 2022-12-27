<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
      * Get the password reset validation rules.
      *
      *
      * Get the password reset validation rules.
      *
      * @return array
      */
     protected function rules()
     {
         return [
             'token' => 'required',
             'email' => 'required|email',
             'password' => 'required|min:8',
         ];
     }

}
