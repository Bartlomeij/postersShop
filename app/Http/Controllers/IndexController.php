<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Poster;

class IndexController extends Controller
{
    public function index()
    {
        $posters = Poster::all();
//        $posters = DB::table('posters')->get();
        return view('welcome', ['posters' => $posters]);
    }
}
