<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config ('db.restaurants');

        foreach ($restaurants as $restaurant) {
            $newrestaurant = new restaurant();
            $newrestaurant-> user_id=$restaurant['user_id'];
            $newrestaurant-> name=$restaurant['name'];
            $newrestaurant-> address=$restaurant['address'];
            $newrestaurant-> vat=$restaurant['vat'];
            $newrestaurant->save();
        }
    }
}
