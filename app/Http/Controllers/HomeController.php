<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View{
        $banners = Banner::all();
        return view('home', ['banners'=>$banners]);
    }
}
