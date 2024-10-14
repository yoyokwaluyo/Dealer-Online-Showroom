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

@include('hondaView.components.breadcrumb', [ 'routes' => [['title' => 'Home', 'route' => route('home')], ['title' => 'Service', 'route' => route('service')], ['title' => 'Booking Service', 'route' => '#']] ])

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

    <div class="stepper-form">
        <div class="tabs">
            <ol>
                <li class="active" data-tabs="1">
                    <div>
                        <i class='bx bxs-car'></i>
                    </div>
                </li>
                <li data-tabs="2">
                    <div>
                        <i class='bx bx-calendar-check'></i>
                    </div>
                </li>
                <li data-tabs="3">
                    <div>
                        <i class='bx bxs-user'></i>
                    </div>
                </li>
            </ol>
        </div>
        <form action="#">
            <div class="my-10 md:w-11/12 mx-auto steps" id="step-1">
                <h3 class="text-2xl font-medium text-gray-900 mb-6">Informasi Kendaraan</h3>
                <div class="grid gap-6 sm:grid-cols-2 mb-10">
                    <div>
                        <label for="model" class="form-label">Model Kendaraan <span class="text-red-500">*</span></label>
                        <select name="model" id="model" class="form-control" data-gtm-form-interact-field-id="0" required>
                            <option value="" disabled="" selected="">Pilih Model</option>
                            <option value="1256-BR-V N7X">BR-V N7X</option>
                            <option value="58-All New Accord">All New Accord</option>
                            <option value="59-All New City">All New City</option>
                            <option value="61-All New CR-V">All New CR-V</option>
                            <option value="1314-New Brio">New Brio</option>
                            <option value="1292-WR-V">WR-V</option>
                            <option value="1233-City Hatchback RS">City Hatchback RS</option>
                            <option value="1268-All New HR-V">All New HR-V</option>
                            <option value="1203-All New Civic RS">All New Civic RS</option>
                            <option value="1224-All New Civic Type R">All New Civic Type R</option>
                            <option value="907-Mobilio">Mobilio</option>
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
                        <input type="text" name="plat" id="plat" class="form-control" placeholder="B 1234 XXX" required="" maxlength="11">
                    </div>
                    <div class="hidden" id="use-voucher">
                        <label class="form-label">Anda bisa gunakan voucher yang tersedia</label>
                        <div class="flex h-[44px]">
                            <div class="flex items-center me-4">
                                <input checked id="siappakai" type="radio" value="" name="voucher" class="w-6 h-6 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                                <label for="siappakai" class="form-label mb-0 ml-2">Siap Pakai</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="tersedia" type="radio" value="" name="voucher" class="w-6 h-6 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 focus:ring-2">
                                <label for="tersedia" class="form-label mb-0 ml-2">Tersedia</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-10 md:w-11/12 mx-auto steps" id="step-2">
                <h3 class="text-2xl font-medium text-gray-900 mb-6">Jadwal Waktu Service</h3>
                <div class="grid gap-6 sm:grid-cols-2 mb-10">
                    <div>
                        <label for="keluhan_service" class="form-label">Tipe Service <span class="text-red-500">*</span></label>
                        <select name="keluhan_service" id="keluhan_service" class="form-control" required="" data-gtm-form-interact-field-id="3">
                            <option value="" disabled="" selected="">Pilih Tipe</option>
                            <option value="PM">Perawatan Berkala (PM)</option>
                            <option value="GR">Perbaikan Umum (GR)</option>
                        </select>
                        <small class="italic">Jika perawatan berkala disertai dengan keluhan, maka disarankan memilih perbaikan umum</small>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-3">
                        <div class="md:col-span-2">
                            <label for="tanggal_service" class="form-label">Pilih Tanggal <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <i class='bx bx-calendar-check text-xl'></i>
                                </div>
                                <input type="text" name="tanggal_service" id="tanggal_service" class="form-control group" required>
                            </div>
                            <small class="italic">Jika kapasitas booking tidak tersedia, dapat menghubungi whatsapp bengkel kami dibawah halaman ini.</small>
                        </div>
                        <div>
                            <label for="waktu_service" class="form-label">Pilih Waktu <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <i class='bx bx-time text-xl'></i>
                                </div>
                                <select name="jam_booking" id="jam_booking" class="form-control group" required>
                                    <option selected="" disabled="" value="">Pilih Waktu*</option>
                                    <option value="07:00">07:00</option>
                                    <option value="07:30">07:30</option>
                                    <option value="08:00">08:00</option>
                                    <option value="08:30">08:30</option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:30">09:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="tipe_service" class="form-label">Kilometer Perawatan yang Diinginkan (Jika Disertai dengan Perawatan) <span class="text-red-500">*</span></label>
                        <select name="tipe_service" id="tipe_service" class="form-control" required="">
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
                    <div>
                        <label for="keluhan" class="form-label">Keluhan <span class="text-red-500">*</span></label>
                        <input type="text" name="keluhan" id="keluhan" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="my-10 md:w-11/12 mx-auto steps" id="step-3">
                <h3 class="text-2xl font-medium text-gray-900 mb-6">Informasi Pemilik</h3>
                <div class="grid gap-6 sm:grid-cols-2 mb-10">
                    <div>
                        <label for="nama_service" class="form-label">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" name="nama_service" id="nama_service" class="form-control" required="">
                    </div>
                    <div>
                        <label for="email_service" class="form-label">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email_service" id="email_service" class="form-control" required="">
                    </div>
                    <div>
                        <label for="nohp_service" class="form-label">Nomor Handphone <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <span class="font-medium">+62</span>
                            </div>
                            <input type="text" name="nohp_service" id="nohp_service" class="form-control group" placeholder="123-45-678" required>
                        </div>
                    </div>
                    <div>
                        <label for="hubungi_service" class="form-label">Hubungi Saya <span class="text-red-500">*</span></label>
                        <select name="hubungi_service" class="form-control" id="hubungi_service" required="">
                            <option value="" selected="" disabled="">Pilih</option>
                            <option value="Telepon">Telepon</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Email">Email</option>
                        </select>
                    </div>
                    <div>
                        <label for="alamat_service" class="form-label">ALamat <span class="text-red-500">*</span></label>
                        <textarea name="alamat_service" class="form-control" id="alamat_service" rows="4" required=""></textarea>
                    </div>
                </div>
            </div>
            <button class="buttons mx-auto" id="button-step" disabled current-steps="1">Lanjut</button>
            <button class="buttons orange mx-auto hidden" type="button" id="button-form" data-modal-target="booking-service-modal" data-modal-toggle="booking-service-modal">Lanjut</button>
        </form>

        <div class="md:w-11/12 mx-auto text-sm text-red-500 italic mt-10">
            Notes: <br>
            - Jika Waktu Booking Anda Lewat dari jam 13.00, Maka Akan di Layani dihari berikutnya <br>
            - Untuk memulai booking di hari minggu maka jadwal yang tersedia di 2 hari berikutnya (Selasa) <br>
            - Dengan mengisi form ini, Anda setuju dan mengizinkan data pribadi yang Anda berikan dalam form ini untuk diproses, dikumpulkan, digunakan, diungkapkan dan atau disimpan oleh <a href="https://www.hondaimora.com/" class="text-blue-500" target="_blank">www.hondaimora.com</a> dan relasinya.
        </div>
    </div>

</div>


<!-- Main modal -->
<div id="booking-service-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[1111] justify-center items-center w-full md:inset-0 h-screen max-h-full bg-black/50">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 pb-0 rounded-t">
                <div class="leading-[1]">
                    <h3 class="text-xl font-semibold text-gray-900">
                        1 Langkah Lagi
                    </h3>
                    <div class="text-xs">Anda akan menerima sms konfirmasi untuk verifikasi data.</div>
                    <div class="text-xs">Masukan No.PIN dari sms yang Anda terima.</div>
                </div>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="booking-service-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-6" action="#">
                    <div>
                        <label for="pin" class="form-label">PIN <span class="text-red-500">*</span></label>
                        <input type="text" name="pin" id="pin" class="form-control" required />
                        <small class="text-red-500 italic">PIN wajib diisi</small>
                    </div>
                    
                    <button type="submit" class="w-full buttons orange">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    let booking = {
        init: function() {
            // hide content step page
            booking.showPage("step-1");

            booking.formValidation(1);
            booking.buttonPIN();
        },
        showPage: function(page) {
            let steps = document.querySelectorAll(".steps");
            steps.forEach(element => {
                element.classList.remove("hidden");
                if (element.id !== page) {
                    element.classList.add("hidden");
                }
            });
        },
        activeTabs: function(page) {
            let tabs = document.querySelectorAll(".tabs ol li");

            tabs.forEach(element => {
                let tab = element.getAttribute("data-tabs");
                if (page == tab) {
                    element.classList.add("active");
                }
            });
        },
        activeButton: function(active, page) {
            let btn = document.querySelector("#button-step");

            if (active) {
                btn.classList.add("orange");
            } else {
                btn.classList.remove("orange");
            }
            btn.disabled = !active;
            btn.setAttribute("current-steps", page);
        },
        formValidation: function(page) {
            let usevoucher = document.querySelector("#use-voucher");
            let formInput = document.querySelectorAll("#step-"+page+" .form-control");
            let btn = document.querySelector("#button-step");
            let btnForm = document.querySelector("#button-form");
            let arr = {};

            formInput.forEach((element, key) => {
                element.addEventListener("change", (e) => {
                    var val = e.target.value;
                    
                    // set array true/false from value input
                    formInput.forEach((el, val) => {
                        (el.value.trim().length !== 0) ? arr[val] = true : arr[val] = false;
                    });
                    // console.log(arr);

                    // Check that all fields are filled in every page step
                    let count = 0;
                    formInput.forEach((elem, idx) => {
                        if (arr[idx]) count++;
                    });
                    // console.log(count);

                    if (count >= formInput.length) { // succes or continue step
                        booking.activeButton(true, page);
                        booking.buttonSubmit(page);
                        if (page == 1) usevoucher.classList.remove("hidden");
                        if (page == 3) { // page ke 3
                            btn.classList.add("hidden");
                            btnForm.classList.remove("hidden"); // show button modal pin
                        }
                    } else {
                        booking.activeButton(false, page);
                        if (page == 1) usevoucher.classList.add("hidden");
                        if (page == 3) { // page ke 3
                            btn.classList.remove("hidden");
                            btnForm.classList.add("hidden"); // hide button modal pin
                        }
                    }
                });
            });
        },
        buttonSubmit: function(page) {
            let btn = document.querySelector("#button-step");
            
            if (page == 1) {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    let pageSteps = e.target.getAttribute("current-steps");
                    
                    if (pageSteps == 1) {
                        booking.showPage("step-2");
                        booking.activeTabs(2);

                        booking.activeButton(false, 2);
                        booking.formValidation(2);
                    }
                });
            }

            if (page == 2) {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    let pageSteps = e.target.getAttribute("current-steps");
                    
                    if (pageSteps == 2) {
                        booking.showPage("step-3");
                        booking.activeTabs(3);
    
                        booking.activeButton(false, 3);
                        booking.formValidation(3);
                    }
                });
            }
        },
        buttonPIN: function() {
            let btn = document.querySelector("#button-form");

            btn.addEventListener("click", function() {
                console.log("PIN");
            });
        }
    }

    document.addEventListener("DOMContentLoaded", (event) => {
        booking.init();

        flatpickr("#tanggal_service", {
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today",
            maxDate: "2024-10-30",
            onChange: function(selectedDates, dateStr, instance) {
                console.log("change");
            },
        });
    });
</script>
@endsection