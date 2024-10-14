<?php

namespace App\View\Components\Honda;

use Closure;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banners extends Component
{
    protected $templateView = "hondaView";
    public $pages;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        switch (Request()->route()->getName()) {
            case 'showroom':
                $this->pages = [
                    [
                        'image' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/5bd07c8a0409275a7779f11ab7d2e764.jpg',
                        'title' => 'Selamat Datang di <br> Dealer Honda Jakarta Center',
                        'button' => '#'
                    ],
                    [
                        'image' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/5bd07c8a0409275a7779f11ab7d2e764.jpg',
                        'title' => 'Selamat Datang di <br> Dealer Honda Jakarta Center',
                        'button' => '#'
                    ]
                ];
                break;
            case 'service':
                $this->pages = [
                    [
                        'image' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/5bd07c8a0409275a7779f11ab7d2e764.jpg',
                        'title' => 'Selamat Datang di <br> Dealer Honda Jakarta Center',
                        'button' => '#'
                    ]
                ];
                break;
            case 'service.booking':
                $this->pages = [
                    [
                        'image' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/101001be59a55b8ce06f2ace002ee9ba.jpg',
                        'title' => '',
                        'button' => '#'
                    ],
                    [
                        'image' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/b756829e39d49961a99c8fabd83ada00.jpg',
                        'title' => '',
                        'button' => '#'
                    ],
                    [
                        'image' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/369838e1dad7e966e6a50063a8fada02.jpg',
                        'title' => '',
                        'button' => '#'
                    ]
                ];
                break;
            case 'sparepart':
                $this->pages = [
                    [
                        'image' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/73cff28db23f767677a3c5550d4597c6.jpg',
                        'title' => '',
                        'button' => '#'
                    ]
                ];
                break;
            case 'usedcar':
                $this->pages = [
                    [
                        'image' => asset('assets/honda/img/banner-usedcar.webp'),
                        'title' => '',
                        'button' => '#'
                    ]
                ];
                break;

            default:
                $this->pages = [
                    [
                        'image' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/5bd07c8a0409275a7779f11ab7d2e764.jpg',
                        'title' => 'Discover Our Company Profile'
                    ]
                ];
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view($this->templateView . '.components.banners');
    }
}
