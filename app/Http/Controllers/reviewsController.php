<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class reviewsController extends Controller{

    public function getReviews($id = null){
        $reviews = Review::all();
        return response()->json([
            "status" => "success",
            "reviews" => $reviews
        ],200);
     }

     public function getReview($id = null){
        if($id){
            $review = Review::find($id);
        }
        else{
            $review = Review::all();
        }
        
        return response()->json([
            "status" => "success",
            "reviews" => $review
        ],200);
     }

}
