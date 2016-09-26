<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Posters;

class IndexController extends Controller
{
    public function index()
    {
        $posters = Posters::all();
//        $posters = DB::table('posters')->get();
        return view('welcome', ['posters' => $posters]);
    }
}
