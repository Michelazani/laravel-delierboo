<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function restaurantRedirect()
    {
        // metodo sul controller che manda l'utente registrato nel suo id
        // per trovare le righe nella tabella che hanno quel determinato user_id
        $restaurant = Restaurant::where('user_id', '=', Auth::id())->get()[0];
        return redirect()->route('admin.restaurants.show', $restaurant->id);
    }

    public function menuRedirect()
    {
        // metodo sul controller che manda l'utente registrato ai suoi piatti
        // per trovare le righe nella tabella che hanno quel determinato user_id
        $restaurant = Restaurant::where('user_id', '=', Auth::id())->get()[0];
        return redirect()->route('admin.restaurants.show', $restaurant->id);
    }
}
