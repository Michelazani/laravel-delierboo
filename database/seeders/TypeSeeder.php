<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config ('db.restaurants');

        foreach ($restaurants as $type) {
            $newtype = new Type();
            $newtype-> name_type = $type['type'];
            $newtype->save();
        }
    }
}
