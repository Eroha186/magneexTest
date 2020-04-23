<?php

use App\Models\TypeRealty;
use Illuminate\Database\Seeder;

class TypeRealtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Квартира',
            'Новостройка',
            'Аренда жилья',
            'Дома / Коттеджи',
            'Коммерческая недвижимость'
        ];

        foreach ($types as $type) {
            TypeRealty::insert([
                'name' => $type
            ]);
        }
    }
}
