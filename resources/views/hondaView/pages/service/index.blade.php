@extends('hondaView.layouts.app')

@section('style')
<style>
    .mySwiperThumbs .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .mySwiperThumbs .swiper-slide-thumb-active {
        opacity: 1 !important;
    }
    .swiper-promo .swiper-slide-active {
        z-index: 2;
    }
    .swiper-promo .swiper-slide-active img {
        transform: scale(1.3);
    }
</style>
@endsection

@section('main')

<x-honda.banners></x-honda.banners>

@include('hondaView.components.breadcrumb', [ 'routes' => [['title' => 'Home', 'route' => route('home')], ['title' => 'Service', 'route' => '#']] ])

<div class="container md:w-[90%] mx-auto px-4 font-roboto my-12">
    <!-- Slider Promo -->
    <div class="relative md:py-10">
        <div class="swiper swiper-promo">
            <div class="swiper-wrapper">
                @for ($a=1; $a<=5; $a++)
                    <div class="swiper-slide py-8 px-8">
                    <img src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/berita/4172427185eeb49e9abc120e132fc427.jpg" alt="" class="rounded-lg shadow-sm transition duration-150 ease-out">
            </div>
            @endfor
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

<!-- Form Service -->
<div class="grid grid-cols-2 max-sm:grid-cols-1 gap-8 mt-10">
    <div class="bg-gray-100 p-8 rounded-md text-center">
        <h3 class="text-2xl font-semibold font-opensans">Lihat E-Work Anda</h3>
        <small class="text-sm text-gray-500">dengan memasukan Passcode Anda (contoh: 123456789123)</small>
        <form action="#">
            <div class="flex mt-6 w-2/3 max-sm:w-full mx-auto">
                <input type="text" name="Name" required class="form-control rounded-r-none" placeholder="Ketik passcode"/>
                <button type="submit" class="p-2.5 px-6 bg-orange-500 hover:bg-orange-600 rounded-r text-white transition duration-150 ease-out hover:ease-in">Lihat</button>
            </div>
        </form>
    </div>
    <div class="bg-gray-100 p-8 rounded-md text-center">
        <h3 class="text-2xl font-semibold font-opensans">Lihat Status Service Kendaraan Anda</h3>
        <small class="text-sm text-gray-500">dengan memasukan No. Polisi Anda (contoh: B 1234 ABC)</small>
        <form action="#">
            <div class="flex mt-6 w-2/3 max-sm:w-full mx-auto">
                <input type="text" name="Name" required class="form-control rounded-r-none" placeholder="Ketik Nomor Polisi"/>
                <button type="submit" class="p-2.5 px-6 bg-orange-500 hover:bg-orange-600 rounded-r text-white transition duration-150 ease-out hover:ease-in">Lihat</button>
            </div>
        </form>
    </div>
    <div class="bg-gray-100 p-8 rounded-md text-center">
        <h3 class="text-2xl font-semibold font-opensans">Lihat Status Service E-Invoice</h3>
        <small class="text-sm text-gray-500">dengan memasukan Passcode Anda (contoh: 123456789123)</small>
        <form action="#">
            <div class="flex mt-6 w-2/3 max-sm:w-full mx-auto">
                <input type="text" name="Name" required class="form-control rounded-r-none" placeholder="Ketik passcode"/>
                <button type="submit" class="p-2.5 px-6 bg-orange-500 hover:bg-orange-600 rounded-r text-white transition duration-150 ease-out hover:ease-in">Lihat</button>
            </div>
        </form>
    </div>
    <div class="bg-gray-100 p-8 rounded-md text-center">
        <h3 class="text-2xl font-semibold font-opensans">Lihat E-Voucher Anda</h3>
        <small class="text-sm text-gray-500">dengan memasukan No. Polisi Anda (contoh: B 1234 ABC)</small>
        <form action="#">
            <div class="flex mt-6 mb-2 w-2/3 max-sm:w-full mx-auto">
                <input type="text" name="Name" required class="form-control rounded-r-none" placeholder="Ketik Nomor Polisi"/>
                <button type="submit" class="p-2.5 px-6 bg-orange-500 hover:bg-orange-600 rounded-r text-white transition duration-150 ease-out hover:ease-in">Lihat</button>
            </div>
        </form>
        <a href="javascript:void(0);" class="text-xs text-blue-700" data-modal-target="petunjuk-modal" data-modal-toggle="petunjuk-modal"><u>Lihat Petunjuk Penggunaan</u></a>
    </div>
</div>

<!-- wiraniaga -->
<div class="my-20">
    <h2 class="text-3xl text-center font-medium">Punya Keluhan? <br>Langsung Tanya Service Advisor Kami</h2>
    <br>

    <x-honda.wiraniaga-favorit></x-honda.wiraniaga-favorit>
</div>

<!-- Booking Service -->
<div class="my-20">
    <div class="bg-gray-100 p-10 py-14 flex max-sm:flex-col max-sm:py-10 max-sm:gap-10 items-center justify-between rounded-lg">
        <div>
            <h4 class="font-light text-xl mb-1">Dapatkan promo dan deal menarik dari kami</h4>
            <h3 class="font-medium text-2xl">Proses Mudah, Promonya Segudang!</h3>
        </div>
        <div>
            <a href="{{ route('service.booking') }}" class="p-4 px-10 bg-orange-500 rounded-md text-white font-medium transition duration-150 ease-in hover:bg-orange-600">
                Booking Service Sekarang
            </a>
        </div>
    </div>
    <a href="{{ route('service.booking') }}" class="buttons orange fixed right-[-5rem] top-1/2 z-[1020] rotate-[270deg]">Booking Service</a>
</div>

<!-- Layanan Service -->
<div class="my-20">
    <h2 class="text-center text-3xl font-medium">Kenapa Harus Service di Honda Jakarta Center ?</h2>
    <div class="grid-content-service">
        <div class="img">
            <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/berita/20ba51a28d83dee32996a9fedc54c99a.jpg" alt="img" class="lazy mx-auto">
        </div>
        <div class="text">
            <h4 class="title">Pengalaman Service Di Dealer Kami</h4>
            <p class="">Kami Memberikan Kenyaman Untuk Anda Selama Service</p>
            <ul class="">
                <li class="">
                    <i class='bx bxs-check-circle text-orange-500 text-xl leading-[1]'></i>
                    Jaminan Kualitas Service
                </li>
                <li class="">
                    <i class='bx bxs-check-circle text-orange-500 text-xl leading-[1]'></i>
                    Tempat Ruang Tunggu Yang Nyaman
                </li>
                <li class="">
                    <i class='bx bxs-check-circle text-orange-500 text-xl leading-[1]'></i>
                    Suku Cadang Original
                </li>
                <li class="">
                    <i class='bx bxs-check-circle text-orange-500 text-xl leading-[1]'></i>
                    Jaminan Suku Cadang
                </li>
                <li class="">
                    <i class='bx bxs-check-circle text-orange-500 text-xl leading-[1]'></i>
                    Garansi Service
                </li>
                <li class="">
                    <i class='bx bxs-check-circle text-orange-500 text-xl leading-[1]'></i>
                    Free Wifi
                </li>
                <li class="">
                    <i class='bx bxs-check-circle text-orange-500 text-xl leading-[1]'></i>
                    Free Snack & Kopi
                </li>
            </ul>
        </div>
    </div>

    <div class="grid-content-service end">
        <div class="img">
            <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/berita/a3bb541239b90c346b97d2bc22243548.jpg" alt="img" class="lazy mx-auto">
        </div>
        <div class="text">
            <h4 class="title">Teknisi Profesional</h4>
            <p class="">Semua Pelayanan Service Dikerjakan Oleh Teknisi Yang Profesional</p>
        </div>
    </div>

    <div class="grid-content-service">
        <div class="img">
            <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/berita/59a02d84365bbcfda2fc2a2e3fd3f923.jpg" alt="img" class="lazy mx-auto">
        </div>
        <div class="text">
            <h4 class="title">Tempat Service Aman Dan Tidak Usah Khawatir</h4>
            <p class="">Tempat Ruang Tunggu Selalu Bersih Dan Aman Untuk Anda Disaat Menunggu Service Mobil Di Dealer Kami</p>
        </div>
    </div>

    <div class="grid-content-service end">
        <div class="img">
            <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/berita/ad06427d392716dc8ce65122b698aa72.jpg" alt="img" class="lazy mx-auto">
        </div>
        <div class="text">
            <h4 class="title">Pelayanan Service Car</h4>
            <p class="">Kami Memberikan Kemudahan Untuk Anda Selama Pandemi Ini Untuk Service Di Rumah</p>
            <ul class="">
                <li class="">
                    <i class='bx bxs-check-circle text-orange-500 text-xl leading-[1]'></i>
                    Tidak Perlu Datang Ke Dealer
                </li>
                <li class="">
                    <i class='bx bxs-check-circle text-orange-500 text-xl leading-[1]'></i>
                    Booking Service Secara Online
                </li>
                <li class="flex items-start gap-1 text-sm font-light">
                    <i class='bx bxs-check-circle text-orange-500 text-xl leading-[1]'></i>
                    Service Mobil Bisa Dirumah
                </li>
            </ul>
        </div>
    </div>

</div>

<!-- Thumbs Gallery Slider -->
<div class="mb-32">
    <h3 class="text-center font-medium text-3xl mb-10">Gallery Service Honda Jakarta Center</h3>
    <div class="swiper mySwiperShow mb-2">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-gray-50 rounded-md">
                <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/01/4ZPLHG0VqxE-nKKVi8DwDRHnTpga6Dug.jpg" class="w-full h-[400px] max-sm:h-[250px] object-contain object-center filter brightness-[80%]" />
            </div>
            <div class="swiper-slide bg-gray-50 rounded-md">
                <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/01/0-YKyfDeHTx-7_e1O4JLoD35VGZVNmku.jpg" class="w-full h-[400px] max-sm:h-[250px] object-contain object-center filter brightness-[80%]" />
            </div>
            <div class="swiper-slide bg-gray-50 rounded-md">
                <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/01/QArWWgY3iR4I2nO04uy8JcxtShDXKq_6.jpg" class="w-full h-[400px] max-sm:h-[250px] object-contain object-center filter brightness-[80%]" />
            </div>
            <div class="swiper-slide bg-gray-50 rounded-md">
                <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/02/I5JuNQO87Cz77AfXKNxLRJW3lhcKEUT0.jpg" class="w-full h-[400px] max-sm:h-[250px] object-contain object-center filter brightness-[80%]" />
            </div>
            <div class="swiper-slide bg-gray-50 rounded-md">
                <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/02/WQC_zjJ7559YT6GqPva9QQjBkVD8N_t7.jpg" class="w-full h-[400px] max-sm:h-[250px] object-contain object-center filter brightness-[80%]" />
            </div>
            <div class="swiper-slide bg-gray-50 rounded-md">
                <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/02/P0ui7tNM8_0LniWk5jDhg_fR8LeNOT0M.jpg" class="w-full h-[400px] max-sm:h-[250px] object-contain object-center filter brightness-[80%]" />
            </div>
            <div class="swiper-slide bg-gray-50 rounded-md">
                <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/02/STw3BOcGV_sKKw1NPl5G8jP3Xq-ZABWU.jpg" class="w-full h-[400px] max-sm:h-[250px] object-contain object-center filter brightness-[80%]" />
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="w-1/2 max-sm:w-full mx-auto">
        <div thumbsSlider="" class="swiper mySwiperThumbs">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/01/4ZPLHG0VqxE-nKKVi8DwDRHnTpga6Dug.jpg" class="h-20 max-sm:h-10 object-contain cursor-pointer" />
                </div>
                <div class="swiper-slide">
                    <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/01/0-YKyfDeHTx-7_e1O4JLoD35VGZVNmku.jpg" class="h-20 max-sm:h-10 object-contain cursor-pointer" />
                </div>
                <div class="swiper-slide">
                    <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/01/QArWWgY3iR4I2nO04uy8JcxtShDXKq_6.jpg" class="h-20 max-sm:h-10 object-contain cursor-pointer" />
                </div>
                <div class="swiper-slide">
                    <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/02/I5JuNQO87Cz77AfXKNxLRJW3lhcKEUT0.jpg" class="h-20 max-sm:h-10 object-contain cursor-pointer" />
                </div>
                <div class="swiper-slide">
                    <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/02/WQC_zjJ7559YT6GqPva9QQjBkVD8N_t7.jpg" class="h-20 max-sm:h-10 object-contain cursor-pointer" />
                </div>
                <div class="swiper-slide">
                    <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/02/P0ui7tNM8_0LniWk5jDhg_fR8LeNOT0M.jpg" class="h-20 max-sm:h-10 object-contain cursor-pointer" />
                </div>
                <div class="swiper-slide">
                    <img src="https://imgcdn.rajamobil.com/resize2/public/media/images/sales/gallery/original/124251/2020/10/02/STw3BOcGV_sKKw1NPl5G8jP3Xq-ZABWU.jpg" class="h-20 max-sm:h-10 object-contain cursor-pointer" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main modal -->
<div id="petunjuk-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[1111] w-full md:inset-0 h-screen max-h-full bg-black/50">
    <div class="relative p-4 w-full md:max-w-[80%] max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Petunjuk Penggunaan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="petunjuk-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <ol class="stepper">
                    <li class="">
                        <div class="progress">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="description">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Langkah 1</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Masuk ke halaman service pada menu dealer, dan pilih “Lihat E-Voucher Anda” dengan memasukkan no. Polisi kendaraan Anda, lalu tekan lihat</p>
                        </div>
                    </li>
                    <li class="">
                        <div class="progress">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="description">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Langkah 2</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Anda akan melihat semua voucher yang tersedia untuk Anda. pilih salah 1 voucher yang Anda inginkan lalu claim voucher</p>
                        </div>
                    </li>
                    <li class="">
                        <div class="progress">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="description">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Langkah 3</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Salin kode voucher yang tersedia lalu pilih claim via “Booking atau non Booking” untuk redeem voucher, lalu tekan claim. Anda bisa mengklaim semua voucher Anda dengan mengikuti langkah ke 2</p>
                        </div>
                    </li>
                    <li class="">
                        <div class="progress">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="description">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Langkah 4</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Ketika Anda pilih klaim via booking maka akan diarahkan ke menu booking service, isi data yang diperlukan lalu pilih salah 1 voucher atau semua yang sudah Anda klaim untuk di redeem lalu tekan lanjut, ikuti petunjuk pengisian data sampai selesai.</p>
                            <br>
                            <p class="text-xs font-normal text-gray-500 dark:text-gray-400">Noted:</p>
                            <p class="text-xs font-normal text-gray-500 dark:text-gray-400">Ketika Anda pilih klaim via non booking maka tunjukan bukti klaim voucher Anda kepada Service Advisor yang sudah kami infokan di email Anda.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection