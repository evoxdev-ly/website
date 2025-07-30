<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::with(['services' => function($query) {
            return $query->orderBy('order');
        }, 'projects'])->firstOrFail();

        return view('pages.home', compact('home'));
    }
}
