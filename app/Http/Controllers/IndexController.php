<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WebContent;
use App\Models\User;
use App\Models\review;
use App\Models\galleryImage;


class IndexController extends Controller
{
    public function index(){
        $content = WebContent::all();
        $users = User::all();
        $reviews = review::all();
        $images = galleryImage::all();
        
        return view('index.index')->with('reviews', $reviews)->with('content', $content)->with('images', $images);
    }
}
