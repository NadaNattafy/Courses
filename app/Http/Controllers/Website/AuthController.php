<?php

namespace App\Http\Controllers\Website;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\StoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function UserLogin(StoreRequest $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->intended('/home')
                        ->withSuccess('Signed in');
        }

        return redirect("/home")->withSuccess('Login details are not valid');
    }

    public function TrainerLogin(StoreRequest $request)
    {

        $credentials = $request->only('email', 'password');
        if (auth()-> guard('trainer') ->attempt($credentials)) {

            return redirect()->intended('/home')
                        ->withSuccess('Signed in');
        }

        return redirect("/home")->withSuccess('Login details are not valid');
    }

    public function GetLoginTrainer()
    {
          return view('website.trainerlogin');
        }


    public function logout(){
        Auth::logout();
                return redirect('/home');
    }

    public function logouttrainer( Request $request )
      {
        if(Auth::guard('trainer')->check())
         {
            Auth::guard('trainer')->logout();
            return redirect('/home');
        }

    }

}
