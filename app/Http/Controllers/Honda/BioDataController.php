<?php

namespace App\Http\Controllers\Honda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BioDataController extends Controller
{
    protected $templateView = "hondaView";

    public function customercare(Request $request)
    {
        return view($this->templateView.'.pages.biodata.customercare');
    }

    public function gallery(Request $request)
    {
        return view($this->templateView.'.pages.biodata.gallery');
    }
}
