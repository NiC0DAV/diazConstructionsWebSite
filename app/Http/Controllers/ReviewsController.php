<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\review;

class ReviewsController extends Controller
{

    public function index(){

        return view('reviews.review');

    }

    public function store(Request $request){

        $reviewData = new review();

        $reviewData->userName = $request->get('userName');
        $reviewData->userEmail = $request->get('userEmail');
        $reviewData->userLocation = $request->get('userLocation');
        $reviewData->userDescription = $request->get('userDescription');

        $reviewData->save();
    }

}
