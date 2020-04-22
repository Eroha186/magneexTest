<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Realty;
use App\Models\Street;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index()
    {
        return view('contact.main', (new FilterController())->getDataForFilter());
    }
}
