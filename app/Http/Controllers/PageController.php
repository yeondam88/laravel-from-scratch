<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "todos" => "buy milk",
        ]);
    }

    public function about()
    {
        return view("about", [
            "hello" => "world",
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}