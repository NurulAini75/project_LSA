<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\Partner;
use App\Models\Program;
use App\Models\company;
use App\Models\User;

use Illuminate\Http\Request;

class LandingPagecontroller extends Controller
{
    public function index()
    {
        // Ambil semua data yang diperlukan
        $program = Program::all();
        $gallery = Gallery::all();
        $partner = Partner::all();
        $news = News::all();
        $company = user::findOrFail(1);

        // Kirim data ke view 'frontend'
        return view('frontend.index', compact('program', 'gallery', 'partner', 'news', 'company'));
    }
}
