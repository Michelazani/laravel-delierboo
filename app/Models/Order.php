<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;
use App\Models\Dish;

class Order extends Model
{
    use HasFactory;
    // fa in modo che tabella identifichi quel determinato model 
    protected $table = 'orders';

    public function restaurants(){
        // one to many tra restaurant e orders
        return $this->belongsTo(Restaurant::class);
    }

    public function dishes(){
        // many to many tra dishes e restaurant
        return $this->belongsToMany(Dish::class);
    }
}
