<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Homepage';
        $description = "Homepage description";
        return view('home', compact('title', 'description'));
    }

    public function contacts()
    {
        return 'Contacts page';
    }
}
