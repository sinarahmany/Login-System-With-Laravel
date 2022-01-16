<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()//avoiding not logged in to have access to dashboard page
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('dashboard');
    }
}
