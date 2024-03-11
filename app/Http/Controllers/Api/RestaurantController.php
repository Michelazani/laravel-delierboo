<?php

namespace App\Http\Controllers\Api;

use App\Models\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index (){
        $restaurant = Restaurant::join('restaurant_type', 'restaurants.id', '=', 'restaurant_type.restaurant_id')->join('types', 'types.id', '=', 'restaurant_type.type_id')->get();
        return response()->json([
            'success' => true,
            'results' => $restaurant
        ]);
    }  
}
