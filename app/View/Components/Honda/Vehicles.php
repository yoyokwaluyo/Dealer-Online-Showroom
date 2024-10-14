<?php

namespace App\View\Components\Honda;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class Vehicles extends Component
{
    protected $templateView = "hondaView";
    public $cars;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cars = [
            [
                'id' => '123',
                'name' => 'BR-V N7X',
                'img' => 'https://static.rajamobil.com/media/images/databasemobil/mobilbaru/color/1708484857-S_K_P.png',
                'price' => 'Rp 292.900.000',
                'route' => route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('BR-V N7X'))])
            ],
            [
                'id' => '123',
                'name' => 'All New Accord',
                'img' => 'https://static.rajamobil.com/media/images/databasemobil/mobilbaru/color/1702020396-I_R_M.png',
                'price' => 'Rp 292.900.000',
                'route' => route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('All New Accord'))])
            ],
            [
                'id' => '123',
                'name' => 'All New City',
                'img' => 'https://static.rajamobil.com/media/images/databasemobil/mobilbaru/color/1635741906-Meteoroid_Gray_Metallic_NEW.png',
                'price' => 'Rp 292.900.000',
                'route' => route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('All New City'))])
            ],
            [
                'id' => '123',
                'name' => 'All New CR-V',
                'img' => 'https://static.rajamobil.com/media/images/databasemobil/mobilbaru/color/1691801479-I_R_M.png',
                'price' => 'Rp 292.900.000',
                'route' => route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('All New CR-V'))])
            ],
            [
                'id' => '123',
                'name' => 'WR-V',
                'img' => 'https://static.rajamobil.com/media/images/databasemobil/mobilbaru/color/1667448539-Ignite_Red_Metallic_Two_Tone.png',
                'price' => 'Rp 292.900.000',
                'route' => route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('WR-V'))])
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view($this->templateView.'.components.vehicles');
    }
}
