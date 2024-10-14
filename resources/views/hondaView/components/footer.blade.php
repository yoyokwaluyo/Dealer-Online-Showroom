<footer class="bg-black mb-[70px]">
    <div class="container md:w-[90%] mx-auto px-4 py-10 pb-14">
        <div class="flex max-sm:flex-col justify-between max-sm:gap-10">
            <div class="grid grid-cols-3 max-sm:grid-cols-2 gap-12 max-sm:gap-6 text-white">
                <div>
                    <h2 class="mb-4 font-semibold text-lg">Honda Info</h2>
                    <ul class="grid gap-2 text-sm font-medium">
                        <li class="">
                            <a href="{{ route('gallery') }}" class="hover:font-semibold">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('customercare') }}" class="hover:font-semibold">Customer Care</a>
                        </li>
                        <li>
                            <a href="https://ecare.honda-indonesia.com/" class="hover:font-semibold" target="_blank">Honda E-care</a>
                        </li>
                        <li>
                            <a href="{{ route('pricelist') }}" class="hover:font-semibold">Pricelist</a>
                        </li>
                        <li>
                            <a href="#" class="hover:font-semibold">360 View</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-4 font-semibold text-lg">Top 5 Vehicles</h2>
                    <ul class="grid gap-2 text-sm font-medium">
                        <li class="">
                            <a href="{{ route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('BR-V N7X'))]) }}" class="hover:font-semibold">BR-V N7X</a>
                        </li>
                        <li>
                            <a href="{{ route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('All New Accord'))]) }}" class="hover:font-semibold">All New Accord</a>
                        </li>
                        <li>
                            <a href="{{ route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('All New City'))]) }}" class="hover:font-semibold">All New City</a>
                        </li>
                        <li>
                            <a href="{{ route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('All New CR-V'))]) }}" class="hover:font-semibold">All New CR-V</a>
                        </li>
                        <li>
                            <a href="{{ route('modeldetail', ['bodymodel' => 'mpv', 'modelspec' => 'detail', 'modeltype' => Str::slug(Str::lower('New Brio'))]) }}" class="hover:font-semibold">New Brio</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-4 font-semibold text-lg">After Sales</h2>
                    <ul class="grid gap-2 text-sm font-medium">
                        <li class="">
                            <a href="{{ route('service') }}" class="hover:font-semibold">Service</a>
                        </li>
                        <li>
                            <a href="{{ route('sparepart') }}" class="hover:font-semibold">Spare Part</a>
                        </li>
                        <li>
                            <a href="{{ route('bodypaint') }}" class="hover:font-semibold">Body Paint</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-6 md:mb-0">
                <div class="grid gap-4 max-sm:place-content-center">
                    <div class="flex gap-10 mb-2">
                        <img src="https://www.hondaimora.com/themes/rmperjuangan/images/imora/imora-cc-center-trans.png" alt="" class="object-contain h-16">
                        <img src="https://www.hondaimora.com/themes/rmperjuangan/images/imora/imora-e-care.png" alt="" class="object-contain h-16">
                    </div>
                    <div>
                        <a href="https://play.google.com/store/apps/details?id=id.co.hpm.ecare">
                            <img src="https://rajamobil.s3-ap-southeast-1.amazonaws.com/custom_dealer/assets/logo_google_play.png" alt="" class="object-contain h-9 ml-auto max-sm:mx-auto">
                        </a>
                    </div>
                    <div>
                        <a href="https://apps.apple.com/id/app/honda-e-care/id1457428535">
                            <img src="https://rajamobil.s3-ap-southeast-1.amazonaws.com/custom_dealer/assets/logo_appstore.png" alt="" class="object-contain h-9 ml-auto max-sm:mx-auto">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>