<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

use App\Models\review;
use App\Models\User;

class ReviewsController extends Controller
{
    
    public function reviewsView(){

        return view('reviews.review');
    
    }

    public function reviewsCheck(){

        $reviews = review::all();
        return view('reviews.reviewsView')->with('reviews', $reviews);

    }

    public function reviewsStatusChange($id){

        $reviews = review::find($id);
        return view('reviews.changeStatusReview')->with('reviews', $reviews);

    }

    
    public function reviewStatusEdit(Request $request, $id){

        $reviews = review::find($id);

        $reviews->reviewStatus = $request->get('reviewStatus');
        $reviews->save();

        return redirect('/admDashBoard/reviewsCheck');

    }

    
    public function createReview(Request $request){

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

    public function destroy($id)
    {
        $review = review::find($id);
        $review->delete();
        return redirect('/admDashBoard/reviewsCheck');
    }

}
