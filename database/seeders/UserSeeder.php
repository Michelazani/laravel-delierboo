<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config ('db.restaurants');

        foreach ($restaurants as $user) {
            $newuser = new User();
            $newuser-> email_user=$user['email_user'];
            $newuser-> password_user=$user['password_user'];
            $newuser-> name_user=$user['name_user'];
            $newuser-> lastname_user=$user['lastname_user'];
            $newuser->save();
        }
    }
}
