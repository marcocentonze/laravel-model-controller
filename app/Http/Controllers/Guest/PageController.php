<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        return view('welcome', ['movies' => Movie::all(), 'heading' => 'Our Movies']);
    }
}
