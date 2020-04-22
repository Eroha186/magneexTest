<?php

use App\Models\Street;
use Illuminate\Database\Seeder;

class StreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $streets = [
            [
                'name' => 'Ленина',
                'number_house' => '1',
                'district_id' => 1
            ],
            [
                'name' => 'Ленина',
                'number_house' => '2',
                'district_id' => 1
            ],
            [
                'name' => 'Щетинкина',
                'number_house' => '2',
                'district_id' => 1
            ],
            [
                'name' => 'Пушкина',
                'number_house' => '30',
                'district_id' => 2
            ],
            [
                'name' => 'Пушкина',
                'number_house' => '29',
                'district_id' => 2
            ],
            [
                'name' => 'Некрасова',
                'number_house' => '1',
                'district_id' => 2
            ],
            [
                'name' => 'Некрасова',
                'number_house' => '101',
                'district_id' => 3
            ],
            [
                'name' => 'Ленина',
                'number_house' => '202',
                'district_id' => 3
            ],
            [
                'name' => 'Щетинкина',
                'number_house' => '29',
                'district_id' => 3
            ],
            [
                'name' => 'Тельмана',
                'number_house' => '10',
                'district_id' => 4
            ],
            [
                'name' => 'Пушкина',
                'number_house' => '22',
                'district_id' => 4
            ],
            [
                'name' => 'Щетинкина',
                'number_house' => '28',
                'district_id' => 4
            ]
        ];
       foreach ($streets as $street) {
           Street::insert(
                $street
           );
       }
    }
}
