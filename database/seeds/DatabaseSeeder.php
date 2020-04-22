<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DistrictSeeder::class);
        $this->call(MaterialWallSeeder::class);
        $this->call(StreetSeeder::class);
        $this->call(TypeRealtySeeder::class);
        $this->call(RealtySeeder::class);
    }
}
