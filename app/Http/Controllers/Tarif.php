<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tarif extends Controller
{
    public function index(){
    	return view('tarif.index');
    }

    public function add(){
    	return view('tarif.add');
    }
}
