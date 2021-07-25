<?php 
  
namespace App\Http\Controllers\Auth; 
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon; 
use App\Models\User; 
use Mail; 
use Hash;
use Illuminate\Support\Str;
  
Class ForgetPasswordController extends Controller
{
    public function EmailCheck(Request $request)
    {

        $request->validate([
            'email' => 'required|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        $code = mt_rand(1000, 10000);
        $user->update(['email_verification_code' => $code]);
        $details = [
            'title' => 'code for reset password',
            'body' => $code
        ];

        \Mail::to($request->email)->send(new \App\Mail\resetpassword($details));

        return view('website.index');
    }
    public function CodeCheck(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'code' => 'required|exists:users,email_verification_code',
        ]);

        $user = User::where('email', $request->email)->where('email_verification_code', $request->code)->first();
                return view('website.index');

    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'code' => 'required',
            'password' => 'required|confirmed'
        ]);
        $user = User::where('email', $request->email)->where('email_verification_code', $request->code)->first();
        if (!$user) return \responder::error('wrong reset code ');

        $user->update([
            'password' => $request->password
        ]);
        $user->token = JWTAuth::fromUser($user);
                return view('website.index');
    }
