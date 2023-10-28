<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('auth.articles.index');
    }

    public function create(){
        return view('auth.articles.create');
    }
}
