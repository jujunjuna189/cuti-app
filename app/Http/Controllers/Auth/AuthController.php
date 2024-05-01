<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function onLogin(Request $request)
    {
        try {
            $where['email'] = $request->email;
            $result = User::where($where)->first();

            if (Hash::check($request->password, $result->password, [])) {
                if (Auth::attempt($request->only('email', 'password'))) {
                    return redirect()->route('board');
                } else {
                    return redirect()->route('login');
                }
            } else {
                return redirect()->route('login');
            }
        } catch (Exception $e) {
            return redirect()->route('login');
        }
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function onRegister(Request $request)
    {
        $user = new User();
        $user->fill($request->except('id'));
        if ($user->save()) {
            return redirect()->route('login');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
