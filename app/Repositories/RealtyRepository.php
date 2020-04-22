<?php


namespace App\Repositories;


use App\Models\Realty;

class RealtyRepository
{
    protected $fields = ['street','street.district','materialWall', 'typeRealty'];

    public function getRealtyWithCondition($data)
    {
        $condition = [
            ['type_realty_id', $data['type-realty']],
            ['material_wall_id', $data['wall-material']],
            ['district_id', $data['district']]
        ];

        if ($data['numbers-room']) {
            array_push($condition, ['numbers_room', '>=', $data['numbers-room']]);
        } else {
            array_push($condition, ['numbers_room', $data['numbers-room']]);
        }

        return Realty::with($this->fields)
            ->leftJoin('streets', 'realty.street_id', '=', 'streets.id')
            ->where($condition)
            ->whereBetween('area', [
                $data['area-min-input'], $data['area-max-input']
            ])
            ->whereBetween('price', [
                $data['price-min-input'], $data['price-max-input']
            ])
            ->get();
    }

    public function getRealtyWithStandardOptionFilter()
    {
        return Realty::with($this->fields)->where([
            ['type_realty_id', 1],
            ['numbers_room', 2],
            ['material_wall_id', 5]
        ])->get();
    }
}
