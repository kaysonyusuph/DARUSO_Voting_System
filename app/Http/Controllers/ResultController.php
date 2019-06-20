<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    //

    function result()
    {
    	return View('page/president/result');
    }
    function collegeResult()
    {
    	return view('page/college/result');
    }
    function USSCRResult()
    {
    	return View('page/USSCR/result');
    }
    function classResult()
    {
    	return view('page/class/result');
    }
}
