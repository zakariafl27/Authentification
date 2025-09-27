<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showlogin(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $credantials = $request->validated();

        if(Auth::attempt($credantials)){
            $request->session()->regenerate();

            $role = Auth::user()->role;
            if($role === 'admin'){
                return redirect()->route('admin.dashboard');
            }elseif($role === 'user'){
                return redirect()->route('user.dashboard');
            }else{
                return redirect()->route('login')->WithErrors(['email' => 'invalid Role']);
            }
            return back()->WithErrors(['email' => 'invalid credantials']);
        }
    }

    public function showregister(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'] ?? 'user'
        ]);

        Auth::login($user);

        $role = Auth::user()->role;

        if($role === 'admin'){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('user.dashboard');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
}
