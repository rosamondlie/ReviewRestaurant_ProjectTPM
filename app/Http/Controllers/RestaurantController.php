<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
class RestaurantController extends Controller
{
    public function redirectToAddReviewPage(){
        return view('rate_restaurant');
    }

    public function AddReviewRestaurant(Request $request){
        //insert to database
        // dd($request);
        Restaurant::create([
            'Restaurant_Name' => $request ->Restaurant_Name_input,
            'Location' => $request->Location_input,
            'Rate' => $request->Rate_input,
            'Reviews' => $request->Reviews_input
        ]);
        return redirect('/home');
    }
}
