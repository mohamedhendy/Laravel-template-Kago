<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Dashboard extends Controller
{
    public function __invoke(Request $request)
    {
        return view('back.dashboard');
    }
}
