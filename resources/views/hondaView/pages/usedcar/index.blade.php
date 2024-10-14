@extends('hondaView.layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<x-honda.banners></x-honda.banners>

@include('hondaView.components.breadcrumb', [ 'routes' => [['title' => 'Home', 'route' => route('home')], ['title' => 'Used Car', 'route' => '#']] ])

<div class="container md:w-[90%] mx-auto px-4 font-roboto my-12">
    <div class="space-y-6">
        <div class="text-end italic">
            <p>Bosan dengan mobil lama ?</p>
            <p>Ingin upgrade ke mobil baru dengan harga yang lebih terjangkau?</p>
        </div>
        <div>
            <h5 class="text-xl font-medium mb-2">Dealer Honda Jakarta Center kini hadir dengan fasilitas Used Car yang siap membantu Anda!</h5>
            <p>Dealer Honda Jakarta Center tidak hanya menjual mobil baru, tetapi juga menyediakan beragam pilihan mobil bekas berkualitas dengan harga yang kompetitif. Setiap mobil bekas disini telah melalui proses inspeksi dan servis yang ketat, sehingga Anda dapat yakin mendapatkan mobil yang terjamin kualitas nya.</p>
        </div>
        <div class="space-y-6">
            <h5 class="text-xl font-medium mb-2 text-sky-600">Keunggulan membeli mobil bekas di Dealer Honda Jakarta Center :</h5>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="flex flex-col gap-4">
                    <div class="flex-1 flex items-end">
                        <img data-src="{{ asset('assets/honda/img/competitive.png') }}" alt="image" class="lazy h-[120px] object-contain mx-auto">
                    </div>
                    <div class="text-center flex-1">Dapatkan mobil bekas berkualitas dengan harga yang lebih terjangkau.</div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex-1 flex items-end">
                        <img data-src="{{ asset('assets/honda/img/guarante.png') }}" alt="image" class="lazy h-[120px] object-contain mx-auto">
                    </div>
                    <div class="text-center flex-1">Setiap mobil bekas telah melalui proses inspeksi dan servis yang ketat oleh teknisi berpengalaman.</div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex-1 flex items-end">
                        <img data-src="{{ asset('assets/honda/img/extra-care.png') }}" alt="image" class="lazy h-[120px] object-contain mx-auto">
                    </div>
                    <div class="text-center flex-1">Setiap mobil bekas yang terjual mendapatkan garansi selama 1 tahun.</div>
                </div>
                <div>
                    <img data-src="{{ asset('assets/honda/img/keunggulan.webp') }}" alt="image" class="lazy">
                </div>
            </div>
        </div>
        <div class="space-y-6">
            <h5 class="text-xl font-medium mb-2 text-sky-600">Keuntungan membeli mobil bekas di Dealer Honda Jakarta Center :</h5>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="flex flex-col gap-4">
                    <div class="flex-1 flex items-end">
                        <img data-src="{{ asset('assets/honda/img/secure.png') }}" alt="image" class="lazy h-[120px] object-contain mx-auto">
                    </div>
                    <div class="text-center flex-1">Transaksi yang aman dan terjamin dengan sistem pembayaran yang terpercaya.</div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex-1 flex items-end">
                        <img data-src="{{ asset('assets/honda/img/trade-in.png') }}" alt="image" class="lazy h-[120px] object-contain mx-auto">
                    </div>
                    <div class="text-center flex-1">Dapatkan kemudahan trade in sesuai keinginan dengan harga terbaik.</div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex-1 flex items-end">
                        <img data-src="{{ asset('assets/honda/img/serve.png') }}" alt="image" class="lazy h-[120px] object-contain mx-auto">
                    </div>
                    <div class="text-center flex-1">Nikmati layanan purna jual yang profesional dan ramah, seperti layanan servis dan suku cadang.</div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex-1 flex items-end">
                        <img data-src="{{ asset('assets/honda/img/credit-card-1.png') }}" alt="image" class="lazy h-[120px] object-contain mx-auto">
                    </div>
                    <div class="text-center flex-1">Dapatkan kemudahan dalam proses kredit dengan berbagai pilihan tenor dan bunga yang kompetitif.</div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="text-center">
                <h5 class="text-xl font-medium mb-2 text-sky-600">Supported By:</h5>
                <a href="https://primauto.co.id/" target="_blank">
                    <img data-src="{{ asset('assets/honda/img/logoprimauto.png') }}" alt="image" class="lazy mx-auto">
                </a>
            </div>
            <div class="space-y-4">
                <div class="bg-gray-100 p-6 rounded-lg text-center">
                    <img data-src="{{ asset('assets/honda/img/honda-logo.png') }}" alt="image" class="lazy max-h-[50px] mx-auto mb-2">
                    <h5 class="text-xl font-medium mb-2">Dapatkan Penawaran Mobil Honda Terbaik Disini!</h5>
                </div>
                <div class="grid grid-cols-4 gap-8">
                    <div class="bg-gray-100 w-[90px] md:w-[120px] h-[90px] md:h-[120px] rounded-lg flex items-center justify-center">
                        <i class='bx bxs-user text-7xl'></i>
                    </div>
                    <div class="space-y-4 col-span-3 md:py-9">
                        <p class="text-red-600 font-medium">Customer Support</p>
                        <div class="grid grid-cols-2 gap-2 md:gap-4">
                            <a href="tel:+6281399885850" class="buttons orange w-full" target="_blank">
                                <i class='bx bxs-phone text-2xl'></i>
                                <span>Telepon</span>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=6281399885850&amp;text=" class="buttons green w-full" target="_blank">
                                <i class='bx bxl-whatsapp text-2xl'></i>
                                <span>Whatsapp</span>
                            </a>
                        </div>
                        <div>
                            <a href="https://primauto.co.id/" class="buttons w-full bg-gradient-to-r from-red-600 to-red-800" target="_blank">
                                <span>LIHAT USED CAR</span>
                                <i class='bx bx-chevron-right text-2xl'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection