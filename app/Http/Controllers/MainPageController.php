<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Realty;
use App\Models\Street;
use App\Repositories\RealtyRepository;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    protected $realtyRepository;

    public function __construct()
    {
        $this->realtyRepository = new RealtyRepository();
    }

    public function index()
    {
        return view('main.main',  (new FilterController())->getDataForFilter());
    }
}
