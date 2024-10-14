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

    <!-- wiraniaga -->
    <div class="my-20">
        <h2 class="text-3xl text-center font-medium">Ada Pertanyaan Seputar Body Repair?</h2>
        <h4 class="text-xl text-gray-600 text-center">Langsung Tanya Admin Kami</h4>
        <br>

        <x-honda.wiraniaga-favorit></x-honda.wiraniaga-favorit>
    </div>

    <div class="py-10 md:py-20">
        <div class="flex items-center justify-center md:justify-between gap-8 max-sm:flex-wrap">
            <div>
                <img data-src="https://www.hondaimora.com/themes/rmperjuangan/images/ho/logo/honda-logo.png" alt="image" class="lazy max-h-[40px] object-contain">
            </div>
            <div class="leading-[.8] text-center">
                <h5 class="text-2xl font-medium">See Review</h5>
                <p>what our customers say</p>
            </div>
            <div>
                <a href="#" class="buttons blue">Write Review</a>
            </div>
        </div>
        <div class="mt-10">
            <div class="swiper review-google p-[1rem!important]">
                <div class="swiper-wrapper">
                    @for ($a = 1; $a <= 5; $a++)
                    <div class="swiper-slide border shadow-md rounded-md py-4 px-8 space-y-4">
                        <div class="text-yellow-300 text-2xl text-center">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="text-center space-y-3">
                            <img data-src="https://inging.s3.ap-southeast-1.amazonaws.com/ramo/sales/124315.jpg" alt="image" class="lazy w-[100px] h-[100px] object-contain mx-auto rounded-full">
                            <p class="text-lg font-medium line-clamp-1">Shanty Keswani</p>
                            <a href="https://www.google.com/maps/contrib/111698404063057406712/reviews" target="_blank" class="text-sm">
                                <span class="author">@Shanty Keswani • 1 years ago</span>
                            </a>
                        </div>
                        <div class="line-clamp-3 text-center">
                            <p>Practically the best official Honda service provider with meticulous works and lowest price compared to the others.</p>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>

    <div class="py-10 md:py-20">
        <h2 class="text-3xl text-center font-medium">Kenapa Harus Memperbaiki Mobil di <br> Honda Jakarta Center</h2>
        <h5 class="text-2xl font-medium mt-4">Asuransi</h5>
        <p>Honda Jakarta Center menerima perbaikan mobil dengan Asuransi ataupun tanpa Asuransi ( Pribadi ) Pelanggan dapat langsung mendatangi Honda Jakarta Center dan langsung mengisi form klaim asuransi serta harus memenuhi persyaratan klaim ( apabila mobil tersebut diasuransikan ) dan kami akan menginformasikan jadwal kapan mobil dapat ke Honda Jakarta Center untuk diperbaiki.</p>
        <h5 class="text-2xl font-medium mt-4">Perusahaan Asuransi Yang bekerja sama dengan Honda Jakarta Center yaitu :</h5>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-y-10 mt-10 text-center font-medium">
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/XcsOMk4P9gGAUeuGucN121fnP53u14tcmO94DRaV.jpg" alt="Artarindo Insurance" title="Artarindo Insurance" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>Artarindo Insurance</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/6jUMfvaJ1kQnypIe1yq1aR6CDrUhwoDOpcvVywpL.jpg" alt="Harta Insurance" title="Harta Insurance" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>Harta Insurance</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/wpb9PvrvQivmCyzHjz6i6j5jNq8Vx74IpqG2epgt.jpg" alt="BCA Insurance" title="BCA Insurance" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>BCA Insurance</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/0sMHV8YsGJ2sIsRdoBsi4xmUv0ufo15NsY4ttrSG.jpg" alt="Pan Pacific Insurance" title="Pan Pacific Insurance" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>Pan Pacific Insurance</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/yCcEsOt04d0UFWpIXiYNCzw32lZK8mJlHgEkIFRg.jpg" alt="FPG Insurance Indonesia" title="FPG Insurance Indonesia" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>FPG Insurance Indonesia</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/hchYDrZuE5ds6ppUPFil1e2IPxKgSBuwN7jhLbiw.jpg" alt="Lippo Insurance" title="Lippo Insurance" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>Lippo Insurance</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/MJlOVHVty4Ktl0PN8V98xkNjbo8nFFvfQgcUdR1a.jpg" alt="Sompo Insurance Indonesia" title="Sompo Insurance Indonesia" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>Sompo Insurance Indonesia</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/yDmHlX9EfOJ7eE99pkmjCTAHQPxl6220l89SEz0B.jpg" alt="Buana Independent Insurance" title="Buana Independent Insurance" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>Buana Independent Insurance</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/m5LctgVxpUEb1HNx2FUl4hMIhAK6EHZpd6KBRYAc.png" alt="Etiqa Insurance" title="Etiqa Insurance" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>Etiqa Insurance</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/CNen1OyUmDTb3Y4cZbvx8rnWEYu466HXt6GFdVE5.jpg" alt="Mitsui Sumitomo" title="Mitsui Sumitomo" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>Mitsui Sumitomo</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/4ZmzfVXErabULSgcfbk8ozahz6zOkm2oiMXkXhGm.jpg" alt="CHINA TAIPING Insurance" title="CHINA TAIPING Insurance" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>CHINA TAIPING Insurance</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/UmGwn0Qejs8i2QZRDQWvDoic8YHw44SrcIMByY9n.jpg" alt="Zurich Insurance" title="Zurich Insurance" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>Zurich Insurance</p>
            </div>
            <div>
                <img src="https://inging.s3.ap-southeast-1.amazonaws.com/serviceadvisor/442/kKovj4qdYchJCSotvmxeemRlUDzv7BDlDJE18Upt.png" alt="Rama Insurance" title="Rama Insurance" class="lazy h-[50px] object-contain mx-auto mb-4">
                <p>Rama Insurance</p>
            </div>
        </div>
    </div>

</div>

<!-- reservasi body repair -->
<a href="javascript:void(0);" class="buttons orange fixed right-[-5rem] top-1/2 z-[1020] rotate-[270deg]" data-modal-target="reservasi-modal" data-modal-toggle="reservasi-modal" >Reservasi Body Repair</a>

<!-- Main modal -->
<div id="reservasi-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[1111] justify-center items-center w-full md:inset-0 h-screen max-h-full bg-black/50">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 md:p-5 border-b rounded-t">
                <div class="leading-[1]">
                    <h3 class="text-2xl font-semibold text-gray-900">
                        Reservasi Online
                    </h3>
                </div>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="reservasi-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    <div>
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" required />
                    </div>
                    <div>
                        <label for="phone" class="form-label">Nomor Handphone</label>
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <span class="font-medium">+62</span>
                            </div>
                            <input type="text" id="phone" class="form-control group" placeholder="123-45-678">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="name@company.com" required />
                    </div>
                    <div>
                        <label class="form-label" for="type_of_car">Tipe Kendaraan</label>
                        <select name="type_of_car" id="type_of_car" class="form-control" required>
                            <option selected="" disabled="" value="">Tipe Kendaraan*</option>
                            <option value="1256">BR-V N7X</option>
                            <option value="58">All New Accord</option>
                            <option value="59">All New City</option>
                            <option value="61">All New CR-V</option>
                            <option value="1314">New Brio</option>
                            <option value="1292">WR-V</option>
                            <option value="1233">City Hatchback RS</option>
                            <option value="1268">All New HR-V</option>
                            <option value="1203">All New Civic RS</option>
                            <option value="1224">All New Civic Type R</option>
                            <option value="907">Mobilio</option>                        
                        </select>
                    </div>
                    <div>
                        <label for="tahun_model" class="form-label">Tahun Kendaraan <span class="text-red-500">*</span></label>
                        <select name="tahun_model" id="tahun_model" class="form-control" data-gtm-form-interact-field-id="1" required>
                            <option value="" disabled="" selected="">Pilih Tahun</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                        </select>
                    </div>
                    <div>
                        <label for="plat" class="form-label">No Plat Kendaraan <span class="text-red-500">*</span></label>
                        <input type="text" name="plat" id="plat" class="form-control" placeholder="B 1234 XXX" required maxlength="11">
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="transmisi" class="form-label">Transmisi <span class="text-red-500">*</span></label>
                            <select name="transmission" id="transmisi" class="form-control" required>
                                <option selected="" disabled="" value="">Transmisi*</option>
                                <option value="manual">Manual</option>
                                <option value="matic">Matic</option>
                            </select>
                        </div>
                        <div>
                            <label for="tipe_service" class="form-label">Kilometer <span class="text-red-500">*</span></label>
                            <select name="tipe_service" id="tipe_service" class="form-control" required>
                                <option value="" disabled="" selected="">Pilih Tipe</option>
                                <option value="1,000 km">1,000 km</option>
                                <option value="5,000 km">5,000 km</option>
                                <option value="10,000 km">10,000 km</option>
                                <option value="15,000 km">15,000 km</option>
                                <option value="20,000 km">20,000 km</option>
                                <option value="25,000 km">25,000 km</option>
                                <option value="30,000 km">30,000 km</option>
                                <option value="35,000 km">35,000 km</option>
                                <option value="40,000 km">40,000 km</option>
                                <option value="45,000 km">45,000 km</option>
                                <option value="50,000 km">50,000 km</option>
                                <option value="55,000 km">55,000 km</option>
                                <option value="60,000 km">60,000 km</option>
                                <option value="65,000 km">65,000 km</option>
                                <option value="70,000 km">70,000 km</option>
                                <option value="80,000 km">80,000 km</option>
                                <option value="90,000 km">90,000 km</option>
                                <option value="100,000 km">100,000 km</option>
                                <option value=">100,000 km">&gt;100,000 km</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-3">
                        <div class="md:col-span-2">
                            <label for="tanggal_booking" class="form-label">Pilih Tanggal <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <i class='bx bx-calendar-check text-xl'></i>
                                </div>
                                <input type="text" name="tanggal_booking" id="tanggal_booking" class="form-control group" required>
                            </div>
                            <small class="italic">Jika kapasitas booking tidak tersedia, dapat menghubungi whatsapp bengkel kami dibawah halaman ini.</small>
                        </div>
                        <div>
                            <label for="jam_booking" class="form-label">Pilih Waktu <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <i class='bx bx-time text-xl'></i>
                                </div>
                                <select name="jam_booking" id="jam_booking" class="form-control group" required>
                                    <option selected="" disabled="" value="">Pilih Waktu*</option>
                                    <option value="">07:00</option>
                                    <option value="">07:30</option>
                                    <option value="">08:00</option>
                                    <option value="">08:30</option>
                                    <option value="">09:00</option>
                                    <option value="">09:30</option>
                                    <option value="">10:00</option>
                                    <option value="">10:30</option>
                                </select>
                            </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", (event) => {
                                flatpickr("#tanggal_booking", {
                                    enableTime: false,
                                    dateFormat: "Y-m-d",
                                    minDate: "today",
                                });
                            });
                        </script>
                    </div>
                    <div>
                        <label for="keluhan" class="form-label">Jenis Keluhan dan Tambahan <span class="text-red-500">*</span></label>
                        <textarea name="keluhan" class="form-control" id="keluhan" rows="4" required=""></textarea>
                    </div>
                    
                    <button type="submit" class="w-full mt-[2rem!important] buttons orange">Reservasi</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
@endsection