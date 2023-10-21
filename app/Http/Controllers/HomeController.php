<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login() {
        $data = array(
            'title' => 'Home Page',
        );

        return view('index', $data);
    }

    public function index() {
        $data = array(
            'title' => 'Home Page',
        );

        return view('home', $data);
    }
}
