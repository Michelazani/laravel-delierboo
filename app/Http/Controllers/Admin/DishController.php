<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurant= Restaurant::where('user_id', '=', Auth::id())->get()[0];
        return view('admin.dishes.create', compact('restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $newRestaurantData = $request->all();
        $newDishData = $request->all();
        $imageSrc = Storage::put('uploads/dishes', $newDishData['img_dish']);
        $newDishData['img_dish'] = $imageSrc;
        //dd($request->all());
        $newDish = new Dish();
        $newDish -> fill($newDishData);

        // $imageSrc = Storage::put('uploads/restaurants', $newRestaurantData['image_restaurant']);
        // $newRestaurantData['image_restaurant'] = $imageSrc;


        //dopo il put metto dove voglio che venga salvato il file , e cosa voglio salvare
        // $imageSrc = Storage::disk('uploads/restaurants ', $newRestaurantData['image_restaurant']);
        // $newRestaurantData['image_restaurant'] = $imageSrc;
        $newDish->save();
        return redirect()->route('admin.dishes.show', $newDish->id);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $newDish = new Dish();
        // dd(Auth::user()->email);
        // per identificare che deve andare in quell'id
        $dish = $newDish::where('id', '=', $id)->get()[0];

        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dish = Dish::findOrFail($id);
        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data=$request->all();
        $dish= Dish::find($data['id']);
        $dish->update($data);
        return redirect()->route('admin.dishes.show', $data['id']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
