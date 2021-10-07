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
        $webContentData = WebContent::all();
        $webContentData = User::all();
        $webContentData = review::all();
        $webContentData = galleryImage::all();
        
        return view('index.index');
    }
}
