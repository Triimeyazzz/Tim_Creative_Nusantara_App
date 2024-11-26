<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        $ourTeams = OurTeam::all();
        return view('about', compact('ourTeams'));
    }


    public function portfolio() {
        $categories = Category::with(['portofolios.galleries'])->get();
        return view('portfolio', compact('categories'));
    }
}

