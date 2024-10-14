<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajamobil - Honda</title>
    <meta name="publisher" content="RajaMobil.com">
    <meta name="distribution" content="RajaMobil : Jual Beli Mobil Baru dan Bekas Harga Murah">

    <meta name="description" content="Honda Jakarta Pusat merupakan dealer resmi mobil Honda terpercaya di Jakarta. Melayani penjualan, perawatan, booking service, test drive, bengkel resmi, brosur, tradein mobil lama. Nikmati DP ringan & paket promo kredit murah beserta bonus lainnya.">
    <meta property="fb:app_id" content="181411581975733">
    <meta property="og:title" content="Promo Honda Jakarta Pusat 2024, Test Drive, Showroom, Service | Dealer Honda Imora Jakarta Pusat">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.hondaimora.com/p.jayakarta">
    <meta property="og:image" content="https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/default_slider/default-1.jpg">
    <meta property="og:description" content="Honda Jakarta Pusat merupakan dealer resmi mobil Honda terpercaya di Jakarta. Melayani penjualan, perawatan, booking service, test drive, bengkel resmi, brosur, tradein mobil lama. Nikmati DP ringan & paket promo kredit murah beserta bonus lainnya.">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="https://ramo-statics.s3-ap-southeast-1.amazonaws.com/images/dealer/logo/faviconhonda.png" type="image/x-icon" />

    <!-- import css file -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="{{ asset('assets/honda/datepicker/jquery.datetimepicker.min.css') }}"> https://xdsoft.net/jqplugins/datetimepicker/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="{{ mix('css/app-honda.css') }}" rel="stylesheet">
    @yield('style')

    <!-- import js file -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js" defer></script>
    <!-- <script src="{{ asset('assets/honda/datepicker/jquery.datetimepicker.full.min.js') }}" defer></script> https://xdsoft.net/jqplugins/datetimepicker/ -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ mix('js/honda/app.js') }}"></script>
    @yield('scripts')
</head>

<body>

    @include('hondaView.layouts.loading')

    <main role="main" class="max-w-[1800px] mx-auto">

        <x-honda.navbar-header></x-honda.navbar-header>

        <div class="mt-24 max-sm:mt-[65px]">
            @yield('main')
        </div>

        <x-honda.footer renderView="footer"></x-honda.footer>
        
        <x-honda.footer renderView="footer-button"></x-honda.footer>

    </main>

</body>

</html>