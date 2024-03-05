<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Type;
use App\Models\Dish;
use App\Models\Order;

class Restaurant extends Model
{
    use HasFactory;
    protected $table = 'restaurants';

    public function user(){
        // one to one tra user e restaurant
        return $this->belongsTo(User::class);
    }

    public function types(){
        // many to many tra types e restaurant
        return $this->belongsToMany(Type::class);
    }

    public function dishes(){
        // one to many tra dishes e restaurant
        return $this->hasMany(Dish::class);
    }

    public function orders(){
        // one to many tra orders e restaurant
        return $this->hasMany(Order::class);
    }
}
