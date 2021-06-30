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

            return redirect()->intended('website/home')
                        ->withSuccess('Signed in');
        }

        return redirect("website/home")->withSuccess('Login details are not valid');
    }

    public function logout(){
        Auth::logout();
                return redirect('website/home');
    }
}
