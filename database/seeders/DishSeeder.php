<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurantsData = config('db.restaurants');

        foreach ($restaurantsData as $restaurantData) {
            // Creare un nuovo ristorante
            $restaurant = new Restaurant();
            $restaurant->email = $restaurantData['email'];
            $restaurant->password = bcrypt($restaurantData['password']);
            $restaurant->name = $restaurantData['name'];
            $restaurant->lastname = $restaurantData['lastname'];
            $restaurant->address = $restaurantData['address'];
            $restaurant->vat = $restaurantData['vat'];
            $restaurant->image = $restaurantData['image'];
            $restaurant->type = $restaurantData['type'];
            $restaurant->save();
        
            // Aggiungere piatti al menu del ristorante
            foreach ($restaurantData['menu'] as $dishData) {
                $dish = new Dish();
                $dish->name = $dishData['name'];
                $dish->price = $dishData['price'];
                $dish->ingredients = $dishData['ingredients'];
                $dish->available = $dishData['Available'];
                $dish->img_dish = $dishData['img_dish'];
        
                // Collegare il piatto al ristorante appena creato
                $restaurant->menu()->save($dish);
            }
        }

       
    }
}
