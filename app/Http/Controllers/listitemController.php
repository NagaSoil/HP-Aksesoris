<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listitemController extends Controller
{
    function index(){
        return view('list_item');
    }
}
