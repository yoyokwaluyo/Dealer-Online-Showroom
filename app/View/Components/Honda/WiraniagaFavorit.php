<?php

namespace App\View\Components\Honda;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WiraniagaFavorit extends Component
{
    protected $templateView = "hondaView";
    public $sales;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->sales = [
            [
                'id' => '123',
                'name' => 'Shanty Keswani',
                'img' => 'https://inging.s3.ap-southeast-1.amazonaws.com/ramo/sales/124315.jpg',
                'dealer_slug' => 'alamsutera',
                'dealer_name' => 'Plaza Subaru Alam Sutera',
                'phone' => '+62098981294',
                'wa' => '62098981294',
            ],
            [
                'id' => '21',
                'name' => 'Deddy Lim',
                'img' => 'https://inging.s3.ap-southeast-1.amazonaws.com/ramo/sales/98386.jpg',
                'dealer_slug' => 'bandung',
                'dealer_name' => 'Plaza Subaru Bandung',
                'phone' => '+62098981294',
                'wa' => '62098981294',
            ],
            [
                'id' => '321',
                'name' => 'Ryan Ramadhan',
                'img' => 'https://inging.s3.ap-southeast-1.amazonaws.com/ramo/sales/50227.jpg',
                'dealer_slug' => 'surabaya',
                'dealer_name' => 'Plaza Subaru Surabaya',
                'phone' => '+62098981294',
                'wa' => '62098981294',
            ],
            [
                'id' => '821',
                'name' => 'ARIS SUNANDAR',
                'img' => 'https://inging.s3.ap-southeast-1.amazonaws.com/ramo/sales/127308.jpg',
                'dealer_slug' => 'batam',
                'dealer_name' => 'Plaza Subaru Batam',
                'phone' => '+62098981294',
                'wa' => '62098981294',
            ],
            [
                'id' => '212',
                'name' => 'Rezki Firdaus',
                'img' => 'https://inging.s3.ap-southeast-1.amazonaws.com/ramo/sales/130844.jpg',
                'dealer_slug' => 'tebet',
                'dealer_name' => 'Plaza Subaru Tebet',
                'phone' => '+62098981294',
                'wa' => '62098981294',
            ],
            [
                'id' => '92',
                'name' => 'IRWAN PACE',
                'img' => 'https://s3-ap-southeast-1.amazonaws.com/rajamobil/images/assets_client/127312/d1a2adfe897f02851561ef14a940dacb.png',
                'dealer_slug' => 'pondok-indah',
                'dealer_name' => 'Plaza Subaru Pondok Indah',
                'phone' => '+62098981294',
                'wa' => '62098981294',
            ],
            [
                'id' => '93',
                'name' => 'Yopi Hendra Kustiwa',
                'img' => 'https://inging.s3.ap-southeast-1.amazonaws.com/ramo/sales/108008.jpg',
                'dealer_slug' => 'pondok-indah',
                'dealer_name' => 'Plaza Subaru Pondok Indah',
                'phone' => '+62098981294',
                'wa' => '62098981294',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view($this->templateView.'.components.wiraniaga-favorit');
    }
}
