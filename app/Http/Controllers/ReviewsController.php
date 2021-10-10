<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\review;
use App\Models\User;

class ReviewsController extends Controller
{
    
    public function reviewsAction(){

        return view('reviews.review');

    }

    public function store(Request $request){

        
        $validate = \Validator::make($request->all(), [
            'userName' => ['required','alpha'],
            'userLocation' => ['required', 'alpha'],
            'userEmail' => ['required', 'email', 'unique:reviews']
        ]);

        if($validate->fails()){

            $message = "The review cannot be created because theres currently a review with the same email";
            dd($message);

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
