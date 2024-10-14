@extends('hondaView.layouts.app')

@section('style')
@endsection

@section('main')

<x-honda.banners></x-honda.banners>

@include('hondaView.components.breadcrumb', [ 'routes' => [['title' => 'Home', 'route' => route('home')], ['title' => 'Price List', 'route' => '#']] ])

<div class="container md:w-[90%] mx-auto px-4 font-roboto my-12">
    <div class="w-full overflow-scroll">
        <table class="table pricelist">
            <thead>
                <tr>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Transmisi</th>
                    <th>On the Road</th>
                </tr>
            </thead>
            <tbody class="space-y-4">
                <tr>
                    <th>Mobilio</th>
                    <td>S M/T</td>
                    <td>Manual</td>
                    <th>Rp 239.600.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>BR-V N7X</th>
                    <td>S M/T</td>
                    <td></td>
                    <th>Rp 292.900.000 </th>
                </tr>
                <tr>
                    <th>BR-V N7X</th>
                    <td>E M/T</td>
                    <td></td>
                    <th>Rp 307.100.000 </th>
                </tr>
                <tr>
                    <th>BR-V N7X</th>
                    <td>E CVT</td>
                    <td></td>
                    <th>Rp 318.400.000 </th>
                </tr>
                <tr>
                    <th>BR-V N7X</th>
                    <td>Prestige CVT</td>
                    <td></td>
                    <th>Rp 342.400.000 </th>
                </tr>
                <tr>
                    <th>BR-V N7X</th>
                    <td>Prestige CVT with Honda SENSING™</td>
                    <td></td>
                    <th>Rp 362.400.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>City Hatchback RS</th>
                    <td>M/T</td>
                    <td>6 Speed M/T</td>
                    <th>Rp 352.500.000 </th>
                </tr>
                <tr>
                    <th>City Hatchback RS</th>
                    <td>CVT</td>
                    <td>CVT</td>
                    <th>Rp 362.500.000 </th>
                </tr>
                <tr>
                    <th>City Hatchback RS</th>
                    <td>CVT with Honda Sensing™</td>
                    <td>CVT</td>
                    <th>Rp 382.500.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>All New City</th>
                    <td>All New</td>
                    <td>Automatic</td>
                    <th>Rp 402.000.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>All New HR-V</th>
                    <td>S CVT</td>
                    <td>CVT (Continuously Variable Transmission)</td>
                    <th>Rp 383.900.000 </th>
                </tr>
                <tr>
                    <th>All New HR-V</th>
                    <td>E CVT</td>
                    <td>CVT (Continuously Variable Transmission)</td>
                    <th>Rp 404.200.000 </th>
                </tr>
                <tr>
                    <th>All New HR-V</th>
                    <td>SE CVT</td>
                    <td>CVT (Continuously Variable Transmission)</td>
                    <th>Rp 424.600.000 </th>
                </tr>
                <tr>
                    <th>All New HR-V</th>
                    <td>Turbo RS</td>
                    <td>CVT (Continuously Variable Transmission)</td>
                    <th>Rp 540.300.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>All New Civic RS</th>
                    <td>All New</td>
                    <td>CVT with Earth Dreams Technology</td>
                    <th>Rp 616.800.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>All New Civic Type R</th>
                    <td>6 MT</td>
                    <td>6 Speed M/T</td>
                    <th>Rp 1.427.500.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>New Brio</th>
                    <td>Satya S M/T</td>
                    <td>5 Speed Manual</td>
                    <th>Rp 167.900.000 </th>
                </tr>
                <tr>
                    <th>New Brio</th>
                    <td>Satya E M/T</td>
                    <td>5 Speed Manual</td>
                    <th>Rp 182.800.000 </th>
                </tr>
                <tr>
                    <th>New Brio</th>
                    <td>Satya E CVT</td>
                    <td>CVT with Earth Dreams Technology</td>
                    <th>Rp 198.300.000 </th>
                </tr>
                <tr>
                    <th>New Brio</th>
                    <td>RS M/T</td>
                    <td>5 Speed Manual</td>
                    <th>Rp 243.100.000 </th>
                </tr>
                <tr>
                    <th>New Brio</th>
                    <td>RS CVT</td>
                    <td>CVT with Earth Dreams Technology</td>
                    <th>Rp 253.100.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>WR-V</th>
                    <td>1.5L E M/T</td>
                    <td>6 Speed Manual</td>
                    <th>Rp 274.900.000 </th>
                </tr>
                <tr>
                    <th>WR-V</th>
                    <td>1.5L E CVT</td>
                    <td>CVT</td>
                    <th>Rp 284.900.000 </th>
                </tr>
                <tr>
                    <th>WR-V</th>
                    <td>1.5L RS</td>
                    <td>CVT</td>
                    <th>Rp 304.100.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>BR-V N7X</th>
                    <td>N7X E CVT</td>
                    <td>CVT</td>
                    <th>Rp 319.400.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>WR-V</th>
                    <td>1.5L RS with Honda Sensing</td>
                    <td>CVT</td>
                    <th>Rp 324.100.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>BR-V N7X</th>
                    <td>N7X Prestige CVT</td>
                    <td>CVT</td>
                    <th>Rp 343.400.000 </th>
                </tr>
                <tr>
                    <th>BR-V N7X</th>
                    <td>N7X Prestige with Honda Sensing</td>
                    <td>CVT</td>
                    <th>Rp 363.400.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>All New CR-V</th>
                    <td>1.5L Turbo</td>
                    <td>CVT</td>
                    <th>Rp 749.100.000 </th>
                </tr>
                <tr>
                    <th>All New CR-V</th>
                    <td>2.0L RS e:HEV</td>
                    <td>Electrical CVT</td>
                    <th>Rp 814.400.000 </th>
                </tr>
                <tr class="border-t border-gray-400">
                    <th>All New Accord</th>
                    <td>2.0L RS e:HEV</td>
                    <td>Electrical Continuously Variable Transmission</td>
                    <th>Rp 959.900.000 </th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts')
@endsection