<div class="mt-6 md:mt-14">
    <div class="container md:w-[90%] mx-auto px-4">
        <div class="flex justify-between gap-6 border-b border-gray-700 container mx-auto">
            <a href="{{ route('showroom', ['bodymodel' => 'mpv']) }}" class="btn-explore-vehicle {{ (Str::contains(Request::path(), 'mpv')) ? 'active' : '' }}">MPV</a>
            <a href="{{ route('showroom', ['bodymodel' => 'suv']) }}" class="btn-explore-vehicle {{ (Str::contains(Request::path(), 'suv')) ? 'active' : '' }}">SUV</a>
            <a href="{{ route('showroom', ['bodymodel' => 'others']) }}" class="btn-explore-vehicle {{ (Str::contains(Request::path(), 'others')) ? 'active' : '' }}">others</a>
        </div>
    </div>

    <div class="py-14 mt-3 relative bg-gray-100">
        <img src="{{ asset('assets/honda/img/bg-model.png') }}" alt="background model" class="absolute top-0 left-0 h-[440px] w-full object-cover">
        <div class="swiper-container container mx-auto overflow-hidden">
            <div class="swiper-wrapper">
                @foreach($cars as $car)
                <div class="swiper-slide w-[300px!important]">
                    <div class="w-[300px!important] h-auto bg-white shadow-lg py-8 px-4">
                        <img src="{{ $car['img'] }}" alt="" class="w-full">
                        <div>
                            <h4 class="font-semibold">{{ $car['name'] }}</h4>
                            <div class="text-sm">Starting From <b class="font-semibold text-base">{{ $car['price'] }}</b></div>
                            <a href="{{ $car['route'] }}" class="flex items-center gap-0.5 mt-4 group hover:text-[#FF0000] transition duration-150 ease-out hover:ease-in">
                                Explore
                                <i class='bx bx-chevron-right text-2xl mt-0.5'></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

</div>