@extends('hondaView.layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="">
    @include('hondaView.components.breadcrumb', [ 'routes' => [
    ['title' => 'Home', 'route' => route('home')],
    ['title' => 'Showroom', 'route' => route('showroom', ['bodymodel' => \Request::route('bodymodel')])],
    ['title' => 'Detail list tipe '.\Request::segment(count(\Request::segments())), 'route' => route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('BR-V N7X'))])],
    ['title' => 'Paket Promo', 'route' => '#']
    ] ])
</div>

<div class="container md:w-[90%] mx-auto px-4 font-roboto my-12">
    <div class="grid md:grid-cols-3 gap-10">
        <div class="space-y-6">
            <div class="border border-gray-200 rounded-md py-4 px-4 md:px-8 text-gray-800" id="accordion-collapse" data-accordion="collapse">
                <div class="max-sm:flex max-sm:items-center max-sm:justify-between">
                    <div>
                        <h5 class="text-xl font-medium">Sort By</h5>
                        <p class="text-sm">Mengurutkan hasil berdasarkan pilihan Anda</p>
                    </div>
                    <div class="md:hidden" id="accordion-collapse-heading-1">
                        <i class='bx bx-chevron-down text-4xl cursor-pointer rounded-md' data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1"></i>
                    </div>
                </div>
                <div class="hidden md:block" id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
                    <hr class="my-4">
                    <div class="space-y-2">
                        <div class="flex items-center me-4">
                            <input id="terbaru" type="radio" name="sortby" value="terbaru" class="w-5 h-5 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                            <label for="terbaru" class="ms-2 cursor-pointer">Promo Terbaru</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="termurah" type="radio" name="sortby" value="termurah" class="w-5 h-5 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                            <label for="termurah" class="ms-2 cursor-pointer">DP Termurah</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="angsuran" type="radio" name="sortby" value="angsuran" class="w-5 h-5 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                            <label for="angsuran" class="ms-2 cursor-pointer">Angsuran Termurah</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input checked id="tunai" type="radio" name="sortby" value="tunai" class="w-5 h-5 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                            <label for="tunai" class="ms-2 cursor-pointer">Promo Tunai</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-gray-200 rounded-md py-4 px-4 md:px-8 pb-6 text-gray-800" id="accordion-open" data-accordion="open">
                <div class="max-sm:flex max-sm:items-center max-sm:justify-between">
                    <div>
                        <h5 class="text-xl font-medium">Filter Hasil Pencarian</h5>
                        <p class="text-sm">Mengurutkan hasil berdasarkan kategori</p>
                    </div>
                    <div class="md:hidden" id="accordion-open-heading-1">
                        <i class='bx bx-chevron-down text-4xl cursor-pointer rounded-md' data-accordion-target="#accordion-open-body-1" aria-expanded="false" aria-controls="accordion-open-body-1"></i>
                    </div>
                </div>
                <div class="hidden md:block" id="accordion-open-body-1" aria-labelledby="accordion-open-heading-1">
                    <hr class="my-4">
                    <form action="#" class="space-y-6">
                        <div class="mt-8">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <select name="lokasi" class="form-control" id="lokasi">
                                <option value="" selected="" disabled="">Pilih Lokasi</option>
                                <option value="5">Jakarta Pusat</option>
                                <option value="1">Jakarta Selatan</option>
                                <option value="2">Jakarta Barat</option>
                                <option value="3">Jakarta Timur</option>
                                <option value="4">Jakarta Utara</option>
                                <option value="5">Jakarta Pusat</option>
                                <option value="6">Tangerang</option>
                                <option value="7">Bekasi</option>
                                <option value="8">Depok</option>
                                <option value="9">Bogor</option>
                                <option value="475">Tangerang Selatan</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="dp_min" class="form-label">DP Minimal</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <span class="font-medium">Rp</span>
                                </div>
                                <input type="text" name="dp_min" id="dp_min" class="form-control group">
                            </div>
                        </div>
                        <div class="">
                            <label for="dp_max" class="form-label">DP Maksimal</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <span class="font-medium">Rp</span>
                                </div>
                                <input type="text" name="dp_max" id="dp_max" class="form-control group">
                            </div>
                        </div>
                        <div class="">
                            <label for="Tenor" class="form-label">Tenor</label>
                            <select name="Tenor" class="form-control" id="Tenor">
                                <option value="" selected="" disabled="">Pilih Tenor</option>
                                <option value="0">Semua</option>
                                <option value="1">1 Tahun</option>
                                <option value="2">2 Tahun</option>
                                <option value="3">3 Tahun</option>
                                <option value="4">4 Tahun</option>
                                <option value="5">5 Tahun</option>
                                <option value="6">6+ Tahun</option>
                            </select>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <button class="buttons orange w-full mx-auto" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="md:col-span-2 space-y-6">
            <div class="px-4 min-h-[211px]">
                <div class="grid md:grid-cols-5 gap-4">
                    <div class="w-full h-full max-sm:order-1 col-span-2">
                        <div class="text-lg">Honda</div>
                        <div class="text-2xl font-bold mt-[-5px]">BR-V N7X</div>
                        <ul class="show-model-spec">
                            <li>SUV</li>
                            <li>1497 cc / 1498 cc</li>
                            <li>Bensin</li>
                            <li>7 Penumpang</li>
                        </ul>
                        <div class="mt-6">
                            <small>Harga OTR Jakarta Mulai</small>
                            <div class="text-xl font-bold text-blue-600">Rp 292 Juta - 363 Juta</div>
                        </div>
                    </div>
                    <div class="w-full h-full col-span-2 max-sm:order-2 flex items-center justify-center">
                        <img data-src="https://img.rajamobil.com/resize2/public/media/images/databasemobil/mobilbaru/color/1708484857-S_K_P.png" alt="Image" class="lazy">
                    </div>
                    <div class="w-full h-full max-sm:order-4">
                        <div class="h-full flex flex-col justify-between max-sm:gap-4">
                            <div class="flex items-center justify-end flex-wrap gap-2">
                                <a href="#" class="text-blue-700 text-2xl"><i class='bx bxl-facebook'></i></a>
                                <a href="#" class="text-sky-500 text-2xl"><i class='bx bxl-twitter'></i></a>
                                <a href="#" class="text-green-500 text-2xl"><i class='bx bxl-whatsapp'></i></a>
                                <div class="w-[1px] h-2/3 bg-gray-400"></div>
                                <a href="#" class="text-gray-800 text-2xl"><i class='bx bx-link-alt bx-rotate-90'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-sm flex items-center justify-between max-sm:flex-wrap max-sm:gap-2 max-sm:hidden">
                <div>Menampilkan Daftar Promo <b>10</b> dari <b>71</b></div>
                <div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li>
                                <a href="#" class="">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">1</a>
                            </li>
                            <li>
                                <a href="#" class="">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="active">3</a>
                            </li>
                            <li>
                                <a href="#" class="">4</a>
                            </li>
                            <li>
                                <a href="#" class="">5</a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            @for ($a = 1; $a <= 4; $a++)
                @if ($a <= 2)
                <div class="border border-gray-200 text-gray-700 shadow-sm rounded-md p-4 pb-3 my-4 transition duration-150 ease-in hover:shadow-md">
                    <div>
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="max-sm:hidden">
                                <img data-src="https://img.rajamobil.com/resize2/public/media/images/databasemobil/mobilbaru/color/1708484857-S_K_P.png" alt="Image" class="lazy">
                            </div>
                            <div class="col-span-3 flex items-center max-sm:flex-col max-sm:gap-4">
                                <div class="flex-grow">
                                    <div class="">BR-V N7X</div>
                                    <div class="text-xl font-semibold mt-[-5px]">S M/T</div>
                                    <ul class="show-model-spec mt-0">
                                        <li>SUV</li>
                                        <li>1497 cc / 1498 cc</li>
                                        <li>Bensin</li>
                                        <li>7 Penumpang</li>
                                    </ul>
                                    <div class="text-sm flex items-center gap-20">
                                        <div>
                                            <div>DP</div>
                                            <div class="text-lg font-semibold text-blue-500">Rp. 15.000.000</div>
                                        </div>
                                        <div>
                                            <div>Angsuran</div>
                                            <div class="text-lg font-semibold text-blue-500">Rp. 5.000.000</div>
                                        </div>
                                    </div>
                                    <div class="text-[.8rem] leading-[1] mt-2">
                                        <small class="text-red-500">*Harga OTR dapat berubah sewaktu-waktu, silahkan konsultasikan dengan wiraniaga terkait.</small>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('penawaranpromo', ['bodymodel' => 'mpv', 'modeltype' => \Str::slug(Str::lower('BR-V N7X')), 'sales' => \Str::slug(Str::lower('Shanty Keswani'))]) }}" class="buttons orange py-3 text-sm">
                                        Lihat Penawaran
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-t mt-4 pt-2">
                            <div class="flex gap-4">
                                <div>
                                    <a href="#">
                                        <img data-src="https://inging.s3.ap-southeast-1.amazonaws.com/ramo/sales/124315.jpg" alt="image" class="lazy w-[60px] h-[60px] rounded-full shadow-md">
                                    </a>
                                </div>
                                <div class="text-sm">
                                    <div class="flex items-center gap-3 font-medium">
                                        <div class="line-clamp-1">Shanty Keswani</div>
                                        <div class="w-[18px] h-[18px] rounded-full flex items-center justify-center bg-yellow-200 border-2 border-yellow-500"><i class="bx bxs-star text-xs"></i></div>
                                    </div>
                                    <div>Honda Jakarta Center</div>
                                    <div class="font-medium text-red-500 mt-1">44 Mobil Terjual</div>
                                    <ul class="star-reviews my-0 text-xs mt-[-5px]">
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star-half'></i></li>
                                        <li><i class='bx bx-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <img data-src="https://imgcdn.rajamobil.com/resize2/public/media/images/leasing/new-clipan-logo.jpg" alt="image" class="lazy max-w-[100px]">
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="border border-gray-200 text-gray-700 shadow-sm rounded-md p-4 pb-3 my-4 transition duration-150 ease-in hover:shadow-md">
                    <div>
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="max-sm:hidden">
                                <img data-src="https://img.rajamobil.com/resize2/public/media/images/databasemobil/mobilbaru/color/1708484857-S_K_P.png" alt="Image" class="lazy">
                            </div>
                            <div class="col-span-3 flex items-center max-sm:flex-col max-sm:gap-4">
                                <div class="flex-grow">
                                    <div class="">BR-V N7X</div>
                                    <div class="text-xl font-semibold mt-[-5px]">S M/T</div>
                                    <ul class="show-model-spec mt-0">
                                        <li>SUV</li>
                                        <li>1497 cc / 1498 cc</li>
                                        <li>Bensin</li>
                                        <li>7 Penumpang</li>
                                    </ul>
                                    <div class="text-sm flex items-center gap-20">
                                        <div>
                                            <div>Promo Tunai</div>
                                            <div class="text-lg font-semibold text-blue-500">Rp. 350.000.000</div>
                                        </div>
                                    </div>
                                    <div class="text-[.8rem] leading-[1] mt-2">
                                        <small class="text-red-500">*Harga OTR dapat berubah sewaktu-waktu, silahkan konsultasikan dengan wiraniaga terkait.</small>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('penawaranpromo', ['bodymodel' => 'mpv', 'modeltype' => \Str::slug(Str::lower('BR-V N7X')), 'sales' => \Str::slug(Str::lower('Shanty Keswani'))]) }}" class="buttons orange py-3 text-sm">
                                        Lihat Penawaran
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-t mt-4 pt-2">
                            <div class="flex gap-4">
                                <div>
                                    <a href="#">
                                        <img data-src="https://inging.s3.ap-southeast-1.amazonaws.com/ramo/sales/124315.jpg" alt="image" class="lazy w-[60px] h-[60px] rounded-full shadow-md">
                                    </a>
                                </div>
                                <div class="text-sm">
                                    <div class="flex items-center gap-3 font-medium">
                                        <div class="line-clamp-1">Shanty Keswani</div>
                                        <div class="w-[18px] h-[18px] rounded-full flex items-center justify-center bg-yellow-200 border-2 border-yellow-500"><i class="bx bxs-star text-xs"></i></div>
                                    </div>
                                    <div>Honda Jakarta Center</div>
                                    <div class="font-medium text-red-500 mt-1">44 Mobil Terjual</div>
                                    <ul class="star-reviews my-0 text-xs mt-[-5px]">
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star-half'></i></li>
                                        <li><i class='bx bx-star'></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endfor
            <div class="text-sm flex items-center justify-between max-sm:flex-wrap max-sm:gap-2">
                <div>Menampilkan Daftar Promo <b>10</b> dari <b>71</b></div>
                <div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li>
                                <a href="#" class="">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">1</a>
                            </li>
                            <li>
                                <a href="#" class="">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="active">3</a>
                            </li>
                            <li>
                                <a href="#" class="">4</a>
                            </li>
                            <li>
                                <a href="#" class="">5</a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<!-- import another js file -->
@endsection