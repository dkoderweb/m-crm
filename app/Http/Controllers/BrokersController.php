<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrokersController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    public function index(){
        return view('pages.Brokers_list');
    }
}
