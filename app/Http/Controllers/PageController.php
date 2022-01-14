<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class PageController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        return view("index", compact("travels"));
    }

}
