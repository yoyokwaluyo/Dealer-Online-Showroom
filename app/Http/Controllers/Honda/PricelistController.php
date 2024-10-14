<?php

namespace App\Http\Controllers\Honda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricelistController extends Controller
{
    protected $templateView = "hondaView";

    public function index(Request $request)
    {
        return view($this->templateView.'.pages.pricelist.index');
    }
}
