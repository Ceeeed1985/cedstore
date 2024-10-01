<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\View\View;
use App\Models\Collection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View{
        $banners = Banner::all();
        $collections = Collection::all();

        $newArrivals = Product::where("isNewArrival", "true")->orderBy("id", "desc")->get();
        $bestSellers = Product::where("isBestSeller", "true")->orderBy("id", "desc")->get();
        $featured = Product::where("isFeatured", "true")->orderBy("id", "desc")->get();
        $specialOffers = Product::where("isSpecialOffer", "true")->orderBy("id", "desc")->get();

        // dd($featured);

        return view('home', [
            'banners'           => $banners,
            'collections'       => $collections,
            'featured'          => $featured,
            'newArrivals'       => $newArrivals,
            'bestSellers'       => $bestSellers,
            'specialOffers'     => $specialOffers,
            
        ]);
    }
}
