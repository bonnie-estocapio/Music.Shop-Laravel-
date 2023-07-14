<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function __invoke()
    {
        $track = DB::table('tracks')->get();

        return view('shop.main', compact('track'));
    }
}