<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllCategoryController extends Controller
{
    public function index()
    {
        return view('pages.allCategory');
    }
}
