<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\MustVerifyEmail; // 1. Ye line check karein (agar nahi hai to likh lein)
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    use Notifiable;
    public function register(UserRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        if ($user) {
            return redirect()->route('login');
        }
    }
   public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('students.index');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
  
}