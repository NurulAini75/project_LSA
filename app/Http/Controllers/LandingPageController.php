<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $program = Program::all();
        return view('frontend.index', compact('program'));
    }
}
