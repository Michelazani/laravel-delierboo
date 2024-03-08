<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\RestaurantType;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    private $rules = [
        'image_restaurant' => ['image', 'required'],
        
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newRestaurant = new Restaurant();
        $targetRestaurant = $newRestaurant::where('user_id', '=', Auth::id())->get();
        if(count($targetRestaurant) > 0){
            return redirect()->route('home');
        }
        $newTypes = new Type();
        $types = $newTypes::all();
        $restaurants = $newRestaurant::all();
        return view('admin.restaurants.create', compact('types', 'restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newRestaurantData = $request->all();
        // dd($request->all());
        $newRestaurant = new Restaurant();
        $imageSrc = Storage::put('uploads/restaurants', $newRestaurantData['image_restaurant']);
        $newRestaurantData['image_restaurant'] = $imageSrc;
        $newRestaurant -> fill($newRestaurantData);
        $newRestaurant->save();
        return redirect()->route('admin.restaurants.show', $newRestaurant->id);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // il primo richiama la tabella, il secondo richiama la colonna type = id del ristorante. ha unito restaurant con tabella ponte restaurantType->join(sta joinando il type con il risultato della join di prima-> join nella join)  
        // This will join the restaurants table with the restaurant_type table, and then join the restaurant_type table with the types table, resulting in an inner join on the pivot table.
        $restaurant = Restaurant::join('restaurant_type', 'restaurants.id', '=', 'restaurant_type.restaurant_id')->join('types', 'types.id', '=', 'restaurant_type.type_id')->where('restaurant_id', '=', $id)->get()[0];
        // dd($restaurants['name_type']);
        return view('admin.restaurants.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
