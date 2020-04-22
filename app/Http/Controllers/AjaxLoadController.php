<?php

namespace App\Http\Controllers;

use App\Repositories\RealtyRepository;
use Illuminate\Http\Request;

class AjaxLoadController extends Controller
{
    protected $realtyRepository;

    public function __construct()
    {
        $this->realtyRepository = new RealtyRepository();
    }

    public function ajaxLoadContRealty(Request $request)
    {
        return count($this->realtyRepository->getRealtyWithCondition($request->all()));
    }

}
