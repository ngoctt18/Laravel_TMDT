<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index() {
    	return view('admin.login');
    }

    public function login() {

    }

    public function logout() {
    	
    }
}
