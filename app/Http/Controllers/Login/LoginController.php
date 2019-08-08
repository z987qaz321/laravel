<?php

namespace App\Http\Controllers\Login;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
        return view('demo.login.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $account = $request->account;
        $password = $request->password;

        if (Auth::attempt(['account' => $account, 'password' => $password], true)) {
            if (Auth::user()->identity === '0') {
                return redirect()->route('account.index');
            } elseif (Auth::user()->identity === '1') {
                return redirect()->route('team_display.index');
            } elseif (Auth::user()->identity === '2') {
                return redirect()->route('teacher_display.index');
            } elseif (Auth::user()->identity === '3') {
                return redirect()->route('judge_first_test.index');
            }
        } else {
            return redirect()->route('login');
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
