<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use Validator;

class HomeController extends Controller
{
  public function home(){
return view ('home');
    }

public function add(){
return view ('add');
    }
}