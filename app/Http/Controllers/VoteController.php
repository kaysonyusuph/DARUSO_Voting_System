<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    //
    function vote()
    {
    	return view('page/president/vote');
    }
    function collegeVote()
    {
    	return view('page/college/vote');
    }
    function USSCRVote()
    {
    	return View('page/USSCR/vote');
    }
    function classVote()
    {
    	return view('page/class/vote');
    }
}
