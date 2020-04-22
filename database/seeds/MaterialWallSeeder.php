<?php

use App\Models\MaterialWall;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialWallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            'Дерево',
            'Железобетон',
            'Кирпич',
            'Монолит',
            'Панель',
            'Шлакобетон'
        ];

        foreach ($materials as $material) {
            MaterialWall::insert([
                'name' => $material,
            ]);
        }
    }
}
