<?php

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
          '1-й микрорайон',
          '2-й микрорайон',
          '3-й микрорайон',
          '4-й микрорайон',
        ];

        foreach ($districts as $district) {
            District::insert([
               'name' => $district
            ]);
        }
    }
}
