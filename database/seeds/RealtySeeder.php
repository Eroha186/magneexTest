<?php

use App\Models\Realty;
use Illuminate\Database\Seeder;

class RealtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15; $i++) {
            Realty::insert([
               'numbers_room' => rand(1, 6),
                'street_id' => rand(1, 12),
                'material_walls_id' => rand(1, 6),
                'type_realty_id' => rand(1, 5),
                'area' => rand(30, 120),
                'price' => rand(1500000, 5500000)
            ]);
        }
    }
}
