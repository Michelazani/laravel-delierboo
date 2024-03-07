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
        $newTypes = new Type();
        $types = $newTypes::all();
        $newRestaurant = new Restaurant();
        $restaurants = $newRestaurant::all();
        return view('admin.restaurants.create', compact('types', 'restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $newRestaurantData = $request->all();
        $newRestaurantData = $request->validate($this->rules);

        // dd($request->all());
        $newRestaurant = new Restaurant();
        $newRestaurant -> fill($newRestaurantData);

        $imageSrc = Storage::put('uploads/restaurants', $newRestaurantData['image_restaurant']);
        $newRestaurantData['image_restaurant'] = $imageSrc;


        //dopo il put metto dove voglio che venga salvato il file , e cosa voglio salvare
        // $imageSrc = Storage::disk('uploads/restaurants ', $newRestaurantData['image_restaurant']);
        // $newRestaurantData['image_restaurant'] = $imageSrc;
        $newRestaurant->save();
        return redirect()->route('admin.restaurants.show', $newRestaurant->id);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $newRestaurant = new Restaurant();
        // dd(Auth::user()->email);
        // per identificare che deve andare in quell'id
        $restaurant = $newRestaurant::where('id', '=', $id)->get()[0];
        $newTypes = new Type();
        $newRestaurantType = new RestaurantType();
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
