@extends('hondaView.layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<x-honda.banners></x-honda.banners>

@include('hondaView.components.breadcrumb', [ 'routes' => [['title' => 'Home', 'route' => route('home')], ['title' => 'Honda Imora', 'route' => '#']] ])

<!-- vehicles -->
<div class="pt-6 pb-20 max-sm:pb-0">
    <h2 class="text-3xl text-center font-medium">Explore Vehicles</h2>

    <x-honda.vehicles></x-honda.vehicles>
</div>

<div class="container md:w-[90%] mx-auto px-4 font-roboto my-12">
    <!-- wiraniaga -->
    <div class="max-sm:mt-20">
        <h2 class="text-3xl text-center font-medium">Wiraniaga Favorit</h2>
        <h4 class="text-xl text-gray-600 text-center">Daftar Wiraniaga Favorit dari Dealer Honda Jakarta Center</h4>

        <x-honda.wiraniaga-favorit></x-honda.wiraniaga-favorit>
    </div>

    <!-- tentang -->
    <div class="my-20">
        <h2 class="text-3xl font-medium">Tentang Honda Jakarta Center</h2>

        <div class="mt-5">
            <div class="text-collapse line-clamp-3">
                <p>Dealer Honda Jakarta Pusat Pangeran Jayakarta melayani pemesanan, pembelian, serta service segala merk Honda terbaik dan juga terpercaya.</p>
                <p>Untuk layanan yang lebih lengkap, datang langsung ke dealer resmi kami dan nikmati penawaran menarik lainnya.</p>
                <p>Karena kami memiliki teknisi, marketing, serta sales terbaik dan berpengalaman. Kualitas tak perlu anda ragukan lagi demi pilihan kendaraan yang berkualitas.</p>
                <p>Review Honda All New BR-V</p>
                <p>Pada dasarnya Honda BR-V termasuk dalam kategori Low Sport Utility Vehicle atau LSUV. Mobil ini mampu bersaing di pasar otomotif dengan jajaran mobil kelas LSUV lainnya. Sudah bukan rahasia lagi bahwa LSUV termasuk Multi Purpose Vehicle atau MPV.</p>
                <p>Jika dilihat dari segi tampilannya, memang tidak kalah menarik dari kendaraan lain. Kini BR-V sudah menggunakan basis terbarunya secara keseluruhan. Sehingga semua sudah update dengan komponen masa kini yang jauh lebih modern.</p>
                <p>Spesifikasi Honda BR-V terlihat lebih fresh yang menjadikan nilai jualnya semakin tinggi. Hal ini memungkinkan Anda untuk bisa berkendara dengan nyaman tanpa khawatir terjadi kerusakan.</p>
            </div>
            <button class="buttons-outline orange mt-6 mx-auto" id="btn-text-more">Baca Selengkapnya</button>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection