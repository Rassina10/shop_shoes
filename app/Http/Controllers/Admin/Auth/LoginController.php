<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        $this->redirectTo = RouteServiceProvider::ADMIN_HOME();
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}