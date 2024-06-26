<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Election;
use App\Models\Candidate;
use App\Models\Vote;
use Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(): View
    {
        return view('welcome');
    }

    public function login(): View
    {
        return view('login');
    }

    public function signup(): View
    {
        return view('signup');
    }
}
