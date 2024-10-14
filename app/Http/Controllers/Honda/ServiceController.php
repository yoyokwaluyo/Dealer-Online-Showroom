<?php

namespace App\Http\Controllers\Honda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $templateView = "hondaView";
    
    public function index(Request $request)
    {
        return view($this->templateView.'.pages.service.index');
    }

    public function booking(Request $request)
    {
        return view($this->templateView.'.pages.service.booking');
    }

    public function sparepart(Request $request)
    {
        return view($this->templateView.'.pages.service.sparepart');
    }

    public function bodypaint(Request $request)
    {
        return view($this->templateView.'.pages.service.bodypaint');
    }
}
