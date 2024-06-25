<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        // You can fetch data from the database here and pass it to the view
        return view('crud');
    }
}
