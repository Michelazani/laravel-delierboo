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
        $newRestaurantData = $request->validate([
            'name_restaurant' => ['required', 'string', 'min:1', 'max:100'],
            'address_restaurant' => ['required', 'string','min:7', 'max:150'],
            'vat_restaurant' => ['required','string', 'min:13', 'max:13'],
        ]);
        $newRestaurantData = $request->all();
        // dd($request->all());
        $newRestaurant = new Restaurant();
        if(array_key_exists('image_restaurant', $newRestaurantData)){
            $imageSrc = Storage::put('uploads/restaurants/'. str_replace(' ','-', $newRestaurantData['name_restaurant']).'/id-'. Auth::id(), $newRestaurantData['image_restaurant']);
        }
        else{
            $imageSrc = 'uploads/restaurants/default-img/logo_default.jpg';
        }
        $newRestaurantData['image_restaurant'] = $imageSrc;
        $newRestaurant -> fill($newRestaurantData);
        $newRestaurant->save();
        return redirect()->route('admin.restaurants.show', $newRestaurant->id);
        
    }

    /**
     * Display the specified resource.
     */
    //semplificare il metodo show per utilizzare questa relazione anziché fare join manualmente:
        
    public function show(string $id)
    {
        // il primo richiama la tabella, il secondo richiama la colonna type = id del ristorante. ha unito restaurant con tabella ponte restaurantType->join(sta joinando il type con il risultato della join di prima-> join nella join)  
        // This will join the restaurants table with the restaurant_type table, and then join the restaurant_type table with the types table, resulting in an inner join on the pivot table.
        $restaurant= Restaurant::where('user_id', '=', Auth::id())->get()[0];
        return view('admin.restaurants.show', compact('restaurant'));
        //with('types'): carica anticipatamente la relazione types per il ristorante. Questo riduce il numero di query eseguite sul database e migliora le prestazioni.
        //where('id', $id): filtra il ristorante per l'ID fornito.
        //firstOrFail(): recupera il primo risultato della query. Se nessun risultato viene trovato, Laravel lancerà automaticamente un'eccezione ModelNotFoundException, che può essere catturata per mostrare una pagina 404.
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
