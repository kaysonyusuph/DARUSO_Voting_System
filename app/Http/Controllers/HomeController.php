<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function home()
    {
    	return View('page/home');
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

    function index()
    {
        return View('layout/logout/index');
    }


    function register()
    {
        return View('layout/myaccount/register');
    }

   
}
