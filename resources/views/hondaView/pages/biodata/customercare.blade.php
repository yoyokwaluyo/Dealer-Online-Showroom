@extends('hondaView.layouts.app')

@section('style')
@endsection

@section('main')

<x-honda.banners></x-honda.banners>

@include('hondaView.components.breadcrumb', [ 'routes' => [['title' => 'Home', 'route' => route('home')], ['title' => 'Customer Care', 'route' => '#']] ])

<div class="container md:w-[90%] mx-auto px-4 font-roboto my-12">
    <div class="grid md:grid-cols-3 gap-10">
        <div class="space-y-6 max-sm:order-2">
            <div class="border rounded-md py-4 px-6">
                <img data-src="{{ asset('assets/honda/img/imora-cc-center.jpg') }}" alt="image" class="lazy w-auto max-w-full h-auto mx-auto">
                <div>
                    <h4 class="text-2xl font-medium">Contact</h4>
                    <p class="text-gray-700">
                        Saran dan pendapat mengenai mobil Honda, silahkan hubungi Honda Customer Care di
                        <a href="tel:+62216284353" class="text-blue-500" target="_blank">021-6284353</a>
                        atau WA
                        <a href="https://api.whatsapp.com/send?phone=628111949881" class="text-blue-500" target="_blank">08111949881</a>
                        bebas pulsa setiap jam kerja 09:00 - 17:00. Untuk fitur dan detial mobil Honda, silahkan hubungi dealer Honda terdekat.
                        <a href="https://www.hondaimora.com/" class="text-blue-500">Klik disini</a> untuk melihat daftar dealer Honda
                    </p>
                </div>
            </div>
            <div class="border rounded-md p-6 space-y-4">
                <img data-src="{{ asset('assets/honda/img/imora-hp.jpg') }}" alt="image" class="lazy w-auto max-w-full h-[400px] object-contain mx-auto">
                <p class="text-center">Download <span class="text-red-500">Honda e-Care</span> Sekarang juga!</p>
                <div>
                    <a href="https://play.google.com/store/apps/details?id=id.co.hpm.ecare" target="_blank">
                        <img data-src="{{ asset('assets/honda/img/logo_google_play.png') }}" class="lazy w-auto max-w-full h-auto mx-auto mt-2">
                    </a>
                    <a href="https://apps.apple.com/id/app/honda-e-care/id1457428535" target="_blank">
                        <img data-src="{{ asset('assets/honda/img/logo_appstore.png') }}" class="lazy w-auto max-w-full h-auto mx-auto mt-2">
                    </a>
                </div>
            </div>
        </div>
        <div class="md:col-span-2 max-sm:order-1">
            <img data-src="{{ asset('assets/honda/img/imora-shield.jpg') }}" alt="image" class="lazy w-full object-cover">
            <div class="mt-10">
                <div class="my-4 border-b border-gray-200 px-4">
                    <ul class="nav-tabs">
                        <li>
                            <button class="active" type="button" data-target="tab-faq">FAQ</button>
                        </li>
                        <li>
                            <button class="" type="button" data-target="tab-experience">Experience Honda</button>
                        </li>
                    </ul>
                </div>
                <div class="nav-tabs-content">
                    <div class="md:px-4" id="tab-faq">
                        <div id="accordion-faq" data-accordion="collapse">
                            <h2 id="accordion-faq-heading-1">
                                <button type="button" class="max-sm:text-start flex items-center justify-between w-full font-medium rtl:text-right p-4 bg-white hover:bg-gray-100 gap-3" data-accordion-target="#accordion-faq-body-1" aria-expanded="true" aria-controls="accordion-faq-body-1">
                                    <span>Bagaimana saya dapat menghubungi layanan customer Honda ?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-faq-body-1" class="hidden" aria-labelledby="accordion-faq-heading-1">
                                <div class="px-6">
                                    <p class="mb-2 text-gray-600">Saran dan pendapat mengenai mobil Honda, silakan hubungi Honda Customer Care di 021-6284353 atau WA 08111949881 setiap jam kerja 09.00 - 17.00.</p>
                                </div>
                            </div>
                            <h2 id="accordion-faq-heading-2">
                                <button type="button" class="max-sm:text-start flex items-center justify-between w-full font-medium rtl:text-right p-4 bg-white hover:bg-gray-100 gap-3" data-accordion-target="#accordion-faq-body-2" aria-expanded="false" aria-controls="accordion-faq-body-2">
                                    <span>Bagaimanakah cara klaim asuransi ?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-faq-body-2" class="hidden" aria-labelledby="accordion-faq-heading-2">
                                <div class="px-6">
                                    <p class="mb-2 text-gray-600">Untuk informasi terkait asuransi, silakan menghubungi Dealer Honda resmi dan asuransi terkait</p>
                                </div>
                            </div>
                            <h2 id="accordion-faq-heading-3">
                                <button type="button" class="max-sm:text-start flex items-center justify-between w-full font-medium rtl:text-right p-4 bg-white hover:bg-gray-100 gap-3" data-accordion-target="#accordion-faq-body-3" aria-expanded="false" aria-controls="accordion-faq-body-3">
                                    <span>Berapa harga sparepart genuine Honda dan bagaimana cara pemesanannya ?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-faq-body-3" class="hidden" aria-labelledby="accordion-faq-heading-3">
                                <div class="px-6">
                                    <p class="mb-2 text-gray-600">Untuk informasi harga dan pemesanan sparepart genuine Honda, silakan menghubungi Dealer resmi Honda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:p-4" id="tab-experience">
                        <div id="accordion-experience" data-accordion="collapse">
                            <h2 id="accordion-experience-heading-1">
                                <button type="button" class="max-sm:text-start flex items-center justify-between w-full font-medium rtl:text-right p-4 bg-white hover:bg-gray-100 gap-3" data-accordion-target="#accordion-experience-body-1" aria-expanded="true" aria-controls="accordion-experience-body-1">
                                    <span>Bagaimana saya dapat menghubungi layanan Experience Honda ?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-experience-body-1" class="hidden" aria-labelledby="accordion-experience-heading-1">
                                <div class="px-6">
                                    <p class="mb-2 text-gray-600">Silahkan hubungi layanan Experience Honda di 021-6284353 atau WA 08111949881.</p>
                                </div>
                            </div>
                            <h2 id="accordion-experience-heading-2">
                                <button type="button" class="max-sm:text-start flex items-center justify-between w-full font-medium rtl:text-right p-4 bg-white hover:bg-gray-100 gap-3" data-accordion-target="#accordion-experience-body-2" aria-expanded="false" aria-controls="accordion-experience-body-2">
                                    <span>Layanan apa saja yang dapat dibantu oleh layanan Experience Honda ?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-experience-body-2" class="hidden" aria-labelledby="accordion-experience-heading-2">
                                <div class="px-6">
                                    <p class="mb-2 font-medium text-gray-600">* Bantuan darurat di jalan selama 24 jam</p>
                                    <ul class="ps-6 text-gray-600 list-disc mb-4 font-normal">
                                        <li>Layanan penggantian ban</li>
                                        <li>Layanan pengaktifan aki kendaraan</li>
                                        <li>Layanan kunci tertinggal dalam kendaraan</li>
                                        <li>Layanan pengisian bahan bakar maksimal 5 liter untuk kendaraan yang mogok di jalan akibat kehabisan bensin</li>
                                    </ul>
                                    <p class="mb-2 font-medium text-gray-600">* Layanan darurat mobil derek selama 24 jam</p>
                                    <p class="mb-4 ps-3 font-normal text-gray-600">Derek menuju bengkel resmi Honda terdekat pada saat kendaraan mogok atau terjadi kecelakaan</p>
                                    <p class="mb-2 font-medium text-gray-600">* Informasi lokasi hotel dan stasiun polisi terdekat</p>
                                    <p class="mb-2 ps-3 font-normal text-gray-600">(hanya berlaku pada saat kendaraan mogok atau terjadi kecelakaan)</p>
                                </div>
                            </div>
                            <h2 id="accordion-experience-heading-3">
                                <button type="button" class="max-sm:text-start flex items-center justify-between w-full font-medium rtl:text-right p-4 bg-white hover:bg-gray-100 gap-3" data-accordion-target="#accordion-experience-body-3" aria-expanded="false" aria-controls="accordion-experience-body-3">
                                    <span>Apakah yang dimaksud dengan layanan Experience Honda ?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-experience-body-3" class="hidden" aria-labelledby="accordion-experience-heading-3">
                                <div class="px-6">
                                    <p class="mb-2 text-gray-600">Experience Honda merupakan program layanan bantuan darurat 24 Jam yang diberikan secara eksklusif kepada anda selama berkendara dengan Honda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection