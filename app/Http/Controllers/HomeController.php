<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Return random string.
     *
     * @return Response
    */
    public function index()
    {
        return view('home');
    }
}