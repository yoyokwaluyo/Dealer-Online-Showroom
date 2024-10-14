@extends('hondaView.layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="fixed top-0 left-0 z-[1021] w-full">
    <nav class="max-w-[1800px] mx-auto bg-white border-gray-200 dark:bg-gray-900 shadow-md md:shadow-sm font-roboto">
        <div class="container md:w-[90%] mx-auto px-4 flex flex-wrap items-center justify-between h-full md:h-24 py-4">
            <a href="/#sales" class="flex items-center space-x-3 rtl:space-x-reverse">
                <div class="flex items-center gap-4">
                    <div>
                        <img alt="image" class="lazy w-[60px] h-[60px] rounded-full shadow-md" src="https://inging.s3.ap-southeast-1.amazonaws.com/ramo/sales/124315.jpg" style="">
                    </div>
                    <div class="leading-[1.2]">
                        <h5 class="font-medium">Shanty Keswani</h5>
                        <small>Honda Jakarta Center</small>
                    </div>
                </div>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto max-sm:mt-6" id="navbar-default">
                <ul class="flex flex-row">
                    <li class="mr-2">
                        <div class="buttons-click" id="btn-1">
                            <div class="buttons orange py-2 cursor-pointer">
                                <i class='bx bx-phone text-xl'></i>
                                <span class="">082123xxxx</span>
                            </div>
                            <a href="#" class="buttons orange py-2 hidden">
                                <i class='bx bx-phone text-xl'></i>
                                <span class="py-[.1rem]">082123383672181</span>
                            </a>
                        </div>
                    </li>
                    <li class="mr-2">
                        <div class="buttons-click" id="btn-2">
                            <div class="buttons green py-2 cursor-pointer">
                                <i class='bx bxl-whatsapp text-xl'></i>
                                <span class="">082123xxxx</span>
                            </div>
                            <a href="#" class="buttons green py-2 hidden">
                                <i class='bx bxl-whatsapp text-xl'></i>
                                <span class="py-[.1rem]">082123383672181</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="max-sm:mt-[90px]">
    @include('hondaView.components.breadcrumb', [ 'routes' => [
    ['title' => 'Home', 'route' => route('home')],
    ['title' => 'Showroom', 'route' => route('showroom', ['bodymodel' => \Request::route('bodymodel')])],
    ['title' => 'Detail list tipe '.\Request::segment(count(\Request::segments())), 'route' => route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('BR-V N7X'))])],
    ['title' => 'Paket Promo', 'route' => route('paketpromo', ['bodymodel' => 'mpv', 'modeltype' => \Str::slug(Str::lower('BR-V N7X'))])],
    ['title' => 'Penawaran Promo', 'route' => '#']
    ] ])
</div>

<div class="container md:w-[90%] mx-auto px-4 font-roboto my-8">
    <div class="grid grid-cols-1 md:grid-cols-3 max-sm:gap-4">
        <div class="md:col-span-3">
            <div class="bg-black/70 text-white p-4 text-center text-xl font-medium rounded-md rounded-b-none max-sm:rounded-b">
                Dapatkan Penawaran Honda BR-V N7X
            </div>
        </div>
        <div class="md:col-span-2 md:border-l md:border-b p-0 md:p-6 md:rounded-bl-md">
            <div class="mb-4">
                <div class="text-lg">Honda</div>
                <div class="text-2xl font-bold mt-[-5px]">BR-V N7X</div>
                <ul class="show-model-spec">
                    <li>SUV</li>
                    <li>1497 cc / 1498 cc</li>
                    <li>Bensin</li>
                    <li>7 Penumpang</li>
                </ul>
                <div class="text-sm">Dilihat : <span class="text-red-500 font-medium">1 Kali</span></div>
            </div>
            <img data-src="{{ asset('assets/honda/img/promo-penawaran-brv.jpg') }}" alt="image" class="lazy mx-auto w-full max-h-[300px] object-contain">
            <div class="mt-4">
                <div class="font-light">Tipe Mobil <span class="font-medium">Honda All New BR-V S M/T</span></div>
                <div class="text-lg text-red-500 font-medium my-4">READY STOCK!</div>
                <!-- jika kondisi promo kredit -->
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
                <div class="content-penawaran">
                    <p>Benefit yang didapatkan jika pemesanan dengan saya :<br>- Fast respons Sales<br>- DP Ringan 15%<br>- Data kurang dibantu sampai maksimal approve<br>- Data dijemput kerumah<br>- Tidak di approve/ditolak liesing uang keembali 100%<br>- Tersedia all unit Test Drive HONDA<br>- Promo bunga ringan<br>- Solusi untuk Budget DP dan Angsuran yang tepat<br><br>FREE :<br>- Karpet beludru<br>- Shark Fin Antenna<br>- Sensor Parkir<br><br>Bonus Souvenir :<br>- Payung logo Honda<br>- MUG cantik Honda<br>- Gantungan Kunci<br>- Tatakan Plat<br><br>Kelengkapan Mobil :<br>- Segitiga Pengaman<br>- P3K<br>- Tolls Kit<br>- APAR<br><br>* FREE Paket Hemat 1 ( Free Jasa service sampaiKM / 4 tahun + Sparepart yang ada dibuku service oli dll.<br>TINGGAL ISI BENSIN SELAMA 4 TAHUN... :)<br><br></p>
                </div>
                <div class="flex items-start justify-between max-sm:flex-col">
                    <div class="leading-[.8] max-sm:text-center">
                        <p>Pilihan Promo Kredit Honda All New BR-V S M/T Lainnya</p>
                        <h5 class="text-lg font-medium">Honda All New BR-V S M/T</h5>
                    </div>
                    <div class="leading-[.8] max-sm:text-center max-sm:mx-auto">
                        <h5 class="text-lg font-medium text-red-500">Rp 292.900.000</h5>
                        <small class="text-xs mt-[-5px]">(OTR Jakarta)</small>
                        <img data-src="https://imgcdn.rajamobil.com/resize2/public/media/images/leasing/new-clipan-logo.jpg" alt="image" class="lazy max-w-[100px] mt-4">
                    </div>
                </div>
                <div class="relative overflow-x-auto my-4">
                    <table class="table">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3">Tenor</th>
                                <th scope="col" class="px-6 py-3">DP</th>
                                <th scope="col" class="px-6 py-3">Angsuran</th>
                                <th scope="col" class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-6 py-3">12x</td>
                                <td class="px-6 py-3">Rp 37.165.000</td>
                                <td class="px-6 py-3">Rp 23.409.000</td>
                                <td class="px-6 py-3">
                                    <a href="#" class="buttons orange py-1 w-[100px]">Lihat</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-3">24x</td>
                                <td class="px-6 py-3">Rp 37.165.000</td>
                                <td class="px-6 py-3">Rp 23.409.000</td>
                                <td class="px-6 py-3">
                                    <a href="#" class="buttons orange py-1 w-[100px]">Lihat</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="content-penawaran">
                    <p><b>Syarat Pengajuan Kredit :</b></p>
                    <ul>
                        <li>Kartu identitas (KTP / SIM / Pasport)</li>
                        <li>Bukti Pajak Bumi Bangunan atau rekening listrik / PDAM</li>
                        <li>Akta Pendirian Perusahaan dan SLIP (bagi pengusaha)</li>
                        <li>Slip gaji</li>
                        <li>Tagihan kredit 3 bulan terakhir (jika memiliki)</li>
                        <li>Keterangan izin praktik (bagi profesional)</li>
                        <li>Kartu Keluarga</li>
                        <li>NPWP, dll.</li>
                    </ul>
                </div>
                <div class="text-[.8rem] leading-[1] mt-2">
                    <small class="text-red-500">*Harga OTR dapat berubah sewaktu-waktu, silahkan konsultasikan dengan wiraniaga terkait.</small>
                </div>
            </div>
            <div class="flex gap-4 my-4 border-t py-4">
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
                    <div class="font-medium text-red-500 mt-0">44 Mobil Terjual</div>
                    <ul class="star-reviews my-0">
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star-half'></i></li>
                        <li><i class='bx bx-star'></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="md:border-x md:border-b pt-4 md:p-6 max-sm:border-t md:rounded-br-md">
            <h5 class="text-xl font-medium mb-2">Form Penawaran</h5>
            <p class="font-light text-sm mb-4">Isi data berikut dan Kami akan segera menghubungi Anda. (Tanpa dipungut biaya)</p>
            <hr class="mb-4">
            <form action="#" class="space-y-6">
                <div class="">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" required />
                </div>
                <div class="">
                    <label for="no_hp" class="form-label">No Telepon / Whatsapp</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <span class="font-medium">+62</span>
                        </div>
                        <input type="text" name="no_hp" id="no_hp" class="form-control group" required placeholder="82717xxx">
                    </div>
                </div>
                <div class="">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="name@company.com" required />
                </div>
                <div class="">
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
                    <label for="plan" class="form-label">Rencana Pembelian</label>
                    <select name="plan" id="plan" class="form-control">
                        <option value="" selected disabled>Rencana Pembelian</option>
                        <option value="Jaksel">Test Drive</option>
                        <option value="Jaksel">Dalam 1-2 Minggu Ini</option>
                        <option value="Jaksel">Dalam 1-2 Bulan</option>
                        <option value="Jaksel">Dalam Minggu ini</option>
                    </select>
                </div>
                <div>&nbsp;</div>
                <div>
                    <button class="buttons orange w-full mx-auto" type="submit">Minta Penawaran</button>
                </div>
                <div class="">
                    <small>* Dengan menggunakan layanan ini, Anda setuju dengan syarat dan ketentuan yang berlaku.</small> <br>
                    <small>* Dengan mengisi form ini, Anda setuju dan mengizinkan data pribadi yang Anda berikan dalam form ini untuk diproses, dikumpulkan, digunakan, diungkapkan dan atau disimpan oleh <a href="{{ \request()->getHttpHost() }}" class="text-blue-500">{{ \request()->getHttpHost() }}</a> dan relasinya.</small> <br>
                    <div class="flex items-center justify-start flex-wrap gap-2 mt-4">
                        <a href="#" class="text-blue-700 text-2xl"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="text-sky-500 text-2xl"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="text-red-600 text-2xl"><i class="bx bxs-envelope"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<!-- import another js file -->
@endsection