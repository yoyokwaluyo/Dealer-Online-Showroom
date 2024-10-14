@extends('hondaView.layouts.app')

@section('style')
<style>
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

@include('hondaView.components.breadcrumb', [ 'routes' => [['title' => 'Home', 'route' => route('home')], ['title' => 'Spare Part', 'route' => '#']] ])

<div class="container md:w-[90%] mx-auto px-4 font-roboto my-12">
    <!-- Slider Promo -->
    <div class="relative md:py-10">
        <div class="swiper swiper-promo">
            <div class="swiper-wrapper">
                @for ($a=1; $a<=5; $a++)
                <div class="swiper-slide py-8 px-8">
                    <img src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/berita/4172427185eeb49e9abc120e132fc427.jpg" alt="" class="rounded-lg shadow-md transition duration-150 ease-out">
                </div>
                @endfor
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <div class="bg-gray-100 p-10 rounded-md text-center md:w-1/2 mx-auto shadow-sm mt-10">
        <h3 class="text-2xl font-semibold font-opensans">Lihat Tracking Spare Part Anda</h3>
        <small class="text-sm text-gray-500">Pilih data tracking yang akan anda masukan</small>
        <form action="#">
            <div class="space-y-6 mt-6">
                <div class="space-y-2">
                    <div class="flex items-center me-4">
                        <input checked id="CO" type="radio" value="" name="voucher" class="w-5 h-5 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                        <label for="CO" class="form-label mb-0 ml-2">CO (pemesanan part melalui counter part)</label>
                    </div>
                    <div class="flex items-center me-4">
                        <input id="no_plat" type="radio" value="" name="voucher" class="w-5 h-5 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                        <label for="no_plat" class="form-label mb-0 ml-2">No. Polisi (Pemesanan part melalui service Advisor)</label>
                    </div>
                </div>
                <div class="flex">
                    <input type="text" name="Name" required class="form-control rounded-r-none" />
                    <button type="submit" class="p-2.5 px-6 bg-orange-500 hover:bg-orange-600 rounded-r text-white transition duration-150 ease-out hover:ease-in">Tracking</button>
                </div>
            </div>
        </form>
    </div>

    <!-- wiraniaga -->
    <div class="my-20">
        <h2 class="text-3xl text-center font-medium">Ada Pertanyaan Seputar Spare Part?</h2>
        <h4 class="text-xl text-gray-600 text-center">Langsung Tanya Admin Kami</h4>
        <br>

        <x-honda.wiraniaga-favorit></x-honda.wiraniaga-favorit>
    </div>

</div>
<hr>
<div class="container md:w-[90%] mx-auto px-4 font-roboto my-12">
    <h2 class="text-3xl text-center font-medium">Spare Parts Catalog</h2>
    <div class="my-4 border-b border-gray-200">
        <ul class="nav-tabs justify-center">
            <li>
                <button class="active" type="button" data-target="tab-chemicals">Honda Genuine Chemicals</button>
            </li>
            <li>
                <button class="" type="button" data-target="tab-oil">Honda Automobile Oil</button>
            </li>
        </ul>
    </div>
    <div class="nav-tabs-content">
        <div class="md:p-4" id="tab-chemicals">
            <p>Honda Genuine Chemicals adalah produk Chemicals yang formulanya telah disesuaikan dan cocok untuk berbagai kondisi teknis pada seluruh produk mobil Honda. Penggunaan Chemicals diluar dari rekomendasi Honda/non Honda Chemicals dan penggunaan chemicals palsu dengan sengaja, dapat merugikan dan merusak kendaraan Honda Anda, serta dapat menghilangkan jaminan garansi 3 tahun/100.000 km pada kendaraan Honda Anda.</p>
            <div class="space-y-6 mt-10">
                <div class="catalog">
                    <div class="img">
                        <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/01f02668969e957fd1a15178244e9528.jpg" alt="image" class="lazy">
                    </div>
                    <div class="description">
                        <div class="title">Honda MTF</div>
                        <div class="text">Pelumas untuk transmisi bahan dasar hydrotreated parafinnic stock dengan extreme pressure agent, yang berfungsi mencegah rusaknya struktur molekul oli akibat beban berlebih. Juga mengandung anti oksidan, anti karat, dan anti busa yang cocok pada semua kondisi pemakaian, serta mengandung anti gesek guna menjaga perpindahan gigi terseneling dengan sempurna. Kandungan tersebut dapat menjaga mobil Honda Anda pada kondisi yang selalu prima.</div>
                    </div>
                </div>
                <div class="catalog">
                    <div class="img">
                        <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/16c3c7bb787ac1a3c05e47ac3215b599.jpg" alt="image" class="lazy">
                    </div>
                    <div class="description">
                        <div class="title">Honda ATF-Z1</div>
                        <div class="text">Pelumas untuk transmisi otomatis yang dibuat menggunakan bahan dasar hydrotreated paraffinic, dapat menghasilkan resistensi terhadap oksidasi, bersifat sebagai pembersih bagian dalam transmisi, pour point rendah (titik beku), anti gesek dan anti keausan yang tinggi, sehingga pelumas tersebut dapat bertahan lama pada segala kondisi berkendara.</div>
                    </div>
                </div>
                <div class="catalog">
                    <div class="img">
                        <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/ae6a8ad1b2bbd9bc298539bdd5e29b70.jpg" alt="image" class="lazy">
                    </div>
                    <div class="description">
                        <div class="title">Honda CVTF</div>
                        <div class="text">Pelumas ini diciptakan khusus untuk transmisi otomatis berteknologi Continously Variable Transmission atau CVT ciptaan Honda, yang memiliki sifat kekentalan pelumas yang lebih encer dibandingkan dengan pelumas transmisi pada umumnya. Sehingga mampu melumasi dan merawat sistem CVT Honda dengan sempurna..</div>
                    </div>
                </div>
                <div class="catalog">
                    <div class="img">
                        <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/bc921514367f56c2bf7890c857d94706.png" alt="image" class="lazy">
                    </div>
                    <div class="description">
                        <div class="title">Honda Premix Coolant</div>
                        <div class="text">Diformulasikan khusus sebagai cairan pendingin radiator pada semua jenis mobil Honda. Mengandung ethylene glycol dan additive yang berfungsi untuk mencegah terjadinya korosi dan kerak pada metal-metal yang terdapat dalam sistem pendingin radiator. Honda Premix Coolant ini merupakan produk siap pakai tanpa perlu dicampur air lagi sehingga cocok bagi Anda yang beraktifitas tinggi dan menginginkan kepraktisan.</div>
                    </div>
                </div>
                <div class="catalog">
                    <div class="img">
                        <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/02e50ba85bc1759528ad51703c28342a.png" alt="image" class="lazy">
                    </div>
                    <div class="description">
                        <div class="title">Honda Brake Fluid</div>
                        <div class="text">Diformulasikan khusus untuk sistem rem pada semua jenis mobil Honda. Merupakan minyak rem DOT 3 yang mengandung polyglycol yang memiliki titik didih tinggi dan corrosion inhibitor yang berfungsi mencegah terjadinya karat pada sistem rem dan melindungi karet yang terdapat dalam sistem rem.</div>
                    </div>
                </div>
                <div class="catalog">
                    <div class="img">
                        <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/c0afd8e89cc50a07468f650e2d4eb098.jpg" alt="image" class="lazy">
                    </div>
                    <div class="description">
                        <div class="title">Honda PSF-S</div>
                        <div class="text">Untuk menjaga sistem power steering dikendaraan Anda, produk ini dapat menghasilkan stabilitas oksidasi, pour point (titi beku) rendah, anti keausan dan tahan terhadap tekanan tinggi. produk ini aman bagi seluruh jenis seal yang terdapat pada pompa hidrolik di sistem power steering mobil Honda Anda.</div>
                    </div>
                </div>
                <div class="catalog">
                    <div class="img">
                        <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/7122384e3606958a7611a27cff97cb6a.jpg" alt="image" class="lazy">
                    </div>
                    <div class="description">
                        <div class="title">Honda Engine Cleaner</div>
                        <div class="text">Produk ini sangat handal untuk memulihkan tenaga mesin karena kemampuannya untuk mengangkat segala sisa endapan yang menyumbat injektor bahan bakar dan katup masuk. Keuntungan lain penggunaan Honda Engine Cleaner adalah bahan bakar dapat lebih hemat, juga sistem suplai bahan bakar lebih terlindungi sehingga mobil menjadi lebih ramah lingkungan. Untuk mendapatkan hasil yang maksimal sebaiknya digunakan setiap 3.000 – 5.000 km dengan menuangkan 1 botol setiap pengisian 50 liter bahan bakar.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden md:p-4" id="tab-oil">
            <div class="space-y-6 mt-10">
                <div class="catalog">
                    <div class="img">
                        <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/4f847a65ce42651d9bda9553ff7cabf2.jpg" alt="image" class="lazy">
                    </div>
                    <div class="description">
                        <div class="title">Honda Automobile Oil</div>
                        <div class="text">Kini Anda bisa mendapatkan kinerja optimal dari mesin Honda serta meningkatkan efisiensi bahan bakar dan di saat yang bersamaan merawat mesin sekaligus lingkungan, dengan Honda Automobile Oil. Diformulasikan secara khusus oleh Honda R&D Jepang sebagai paduan sempurna bagi mobil Honda Anda. Berdasarkan pengujian internal, Honda Automobile Oil memiliki efektifitas efisiensi bahan bakar yang lebih baik sebesar 4%. Di Honda kami menghargai INVESTASI Anda dengan INOVASI.</div>
                        <div class="space-y-6 mt-10">
                            <div class="catalog inside">
                                <div class="img">
                                    <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/a9a94efeb56b147312cba09443943b6b.png" alt="image" class="lazy">
                                </div>
                                <div class="description">
                                    <div class="title">Efisiensi Bahan Bakar Yang Lebih Baik</div>
                                    <div class="text">Selain menunjang kinerja mesin yang optimal, selama proses pengembangan Honda Automobile Oil, Honda juga telah melakukan serangkaian tes yang menjamin bahwa Honda Automobile Oil memiliki dampak efisiensi bahan bakar yang lebih baik bagi mesin Honda.</div>
                                </div>
                            </div>
                            <div class="catalog inside">
                                <div class="img">
                                    <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/26d7ed263a5e3d1e25499eea6368dbaa.png" alt="image" class="lazy">
                                </div>
                                <div class="description">
                                    <div class="title">Ketahanan Terhadap Resiko Pengentalan dan Abrasi</div>
                                    <div class="text">Honda Automobile Oil juga telas lulus tes uji berkendara yang dilakukan secara menyeluruh dan profesional untuk memastikan bahwa resiko terjadinya pengentalan dan abrasi setelah jangka waktu pemakaian tertentu dapat diminimalisir sehingga menjamin perlindungan maksimal dan kinerja optimal mesin yang lebih tahan lama.</div>
                                </div>
                            </div>
                            <div class="catalog inside">
                                <div class="img">
                                    <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/0d303294c5147c957098d96cf776f193.png" alt="image" class="lazy">
                                </div>
                                <div class="description">
                                    <div class="title">Jangka Waktu Perlindungan Mesin Yang Lebih Lama</div>
                                    <div class="text">Pada umumnya, seiring dengan durasi pemakaian, performa oli memiliki kecenderungan aus. Hal ini merupakan efek reaksi oksidasi yang disebabkan oleh panas dan residu pembakaran bahan bakar. Akibatnya aditif yang berfungsi untuk memproteksi mesin perlahan kehilangan fungsi dan berimbas pada berbagai masalah di dalam mesin.</div>
                                </div>
                            </div>
                            <div class="catalog inside">
                                <div class="img">
                                    <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/f4b8b8c122c16e5f77d1503106563af2.png" alt="image" class="lazy">
                                </div>
                                <div class="description">
                                    <div class="title">Paling Cocok Dengan Suku Cadang Mesin Honda</div>
                                    <div class="text">Kemudian yang tidak kalah pentingnya adalah kecocokan yang menunjang durabilitas suku cadang Honda dengan baik sehingga menjamin kinerja yang efektif, karena Honda Automobile Oil telah lulus uji verifikasi dan terbukti mampu meminimalisir masalah mesin dan penurunan durabilitas akibat kebocoran oli sebagai efek dari pemakaian jangka panjang.</div>
                                </div>
                            </div>
                            <div class="catalog inside">
                                <div class="img">
                                    <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/aba34ecdbc4b3571d93607a6e66ba3a3.png" alt="image" class="lazy">
                                </div>
                                <div class="description">
                                    <div class="title">Lebih Ramah Terhadap Lingkungan</div>
                                    <div class="text">Formula yang ideal pada Honda Automobile Oil mampu menghasilkan proteksi dan kinerja optimal bagi mesin Honda, yang mungkatkan efisiensi konsumsi bahan bakar. Hal tersebut pada akhirnya membuat Honda Automobile Oil lebih ramah terhadap lingkungan, sehingga Anda tidak hanya memperpanjang usia mesin Honda namun juga usia dari bumi kita tercinta.</div>
                                </div>
                            </div>
                            <div class="catalog inside">
                                <div class="img">
                                    <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/product/59b017c0ec5bf64e6aa0070454ab680d.png" alt="image" class="lazy">
                                </div>
                                <div class="description">
                                    <div class="title">Kualitas Lebih baik, Harga Lebih Terjangkau</div>
                                    <div class="text">Dengan standar kualitas yang dimilikinya serta formula yang khusus diracik untuk mesin Honda Anda. Honda Automobile Oil merupakan pilihan yang paling ideal bagi mobil Honda Anda. Karena Anda akan mendapatkan kualitas oli yang lebih baik dengan harga yang lebih terjangkau.</div>
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