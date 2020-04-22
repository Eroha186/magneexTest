<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Realty;
use App\Models\Street;
use App\Repositories\RealtyRepository;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    protected $realtyRepository;

    public function __construct()
    {
        $this->realtyRepository = new RealtyRepository();
    }

    public function showResult(Request $request)
    {
        return view('table_realty', ['realty' => $this->realtyRepository->getRealtyWithCondition($request->all())]);
    }

    public function getDataForFilter()
    {
        return [
            'streets' => Street::all(),
            'districts' => District::all(),
            'realty' => $this->realtyRepository->getRealtyWithStandardOptionFilter(),
            'realtyAll' => count(Realty::all()),
        ];
    }
}
