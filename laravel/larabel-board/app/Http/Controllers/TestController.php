<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index()
    {
        return 'Test.index!!';
    }
    function view()
    {
        return view('test')->with('name','김삿갓');
    }

}
