<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function Homepage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }
}
