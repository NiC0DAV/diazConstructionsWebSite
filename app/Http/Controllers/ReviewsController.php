<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

use App\Models\review;
use App\Models\User;

class ReviewsController extends Controller
{
    
    public function index(){

        return view('reviews.review');
        

    }

    public function store(Request $request){


        $validateData = \Validator::make($request->all(), [
            'userName' => ['required'],
            'userEmail' => ['required','email', 'unique:reviews'],
            'userLocation' => ['required'],
            'userDescription' => ['required']
        ]);

        if($validateData->fails()) {

            return Redirect::back()->withErrors(['msg' => "Sorry, you have to fill all the fields below to create the review or the email you've entered was already submitted on a review"]);

        }else{
            $reviewData = new review();

            $reviewData->userName = $request->get('userName');
            $reviewData->userEmail = $request->get('userEmail');
            $reviewData->userLocation = $request->get('userLocation');
            $reviewData->userDescription = $request->get('userDescription');
    
            $reviewData->save();
    
            return redirect('/');
        }
       
    }

}
