<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //Index page
    public function index(){
      return view('market.index');
    }
}
