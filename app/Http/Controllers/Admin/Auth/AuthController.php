<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function register(){
        $data = [
            'name' => "think digital",
            'email' => "admin@thinkdigitalindia.in",
            'password' => "123456"
        ];

        $user = User::create($data);

        if($user){
            echo "Registerd successfully";
        }else{
            echo "something went wrong";
        }
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required',
        ]);

        $userCredential = $request->only('email', 'password');
        if (Auth::attempt($userCredential)) {
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('error', "Email ID or Password does't match");
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
