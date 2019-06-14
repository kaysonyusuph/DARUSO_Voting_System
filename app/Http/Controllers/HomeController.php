<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function home()
    {
    	return View('home/home');
    }

    function head()
    {
    	return View('home/head');
    }

    function usscr()
    {
    	return View('result/usscr');
    }

    function college()
    {
    	return View('result/college');
    }
}
