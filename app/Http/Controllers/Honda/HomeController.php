<?php

namespace App\Http\Controllers\Honda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $templateView = "hondaView";
    
    public function index(Request $request)
    {
        return view($this->templateView.'.pages.home.index');
    }

    public function showroom(Request $request)
    {
        return view($this->templateView.'.pages.home.showroom');
    }

    public function modeldetail(Request $request)
    {
        return view($this->templateView.'.pages.home.modeldetail');
    }

    public function paketpromo(Request $request)
    {
        return view($this->templateView.'.pages.home.paketpromo');
    }

    public function penawaranpromo(Request $request)
    {
        return view($this->templateView.'.pages.home.penawaranpromo');
    }
}
