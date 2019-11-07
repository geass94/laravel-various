<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        return view('welcome');
    }

    public function getRegisterPage() {
        return view('auth.registration');
    }

    public function getLogin() {
        return view('auth.login');
    }

    public function getDashbaord() {
        $var = 123;
        return view('user.dashboard');
    }

    public function getProfile() {
        return view('user.profile');
    }

    public function addResourcePage() {
        return view('addresource')->with(['categories' => Category::all()]);
    }
}
