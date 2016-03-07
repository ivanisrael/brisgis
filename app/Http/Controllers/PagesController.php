<?php

namespace brisgis\Http\Controllers;

use Illuminate\Http\Request;

use brisgis\Http\Requests;

class PagesController extends Controller
{
    public function getIndex()
    {
 	   return view('welcome');
    }

    public function getUsersPage()
    {
    	return view('pages.userspage');
    }
}
