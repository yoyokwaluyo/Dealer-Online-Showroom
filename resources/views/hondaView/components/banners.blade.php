<div class="swiper myBanners">
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach($pages as $page)
        <div class="swiper-slide">
            <div class="relative">
                <img src="{{ $page['image'] }}" alt="" class="w-full md:h-auto h-[350px] max-h-[600px] object-cover object-top bg-black/90 filter brightness-[90%]">

                <div class="absolute top-0 left-0 w-full h-full z-20 flex justify-center items-center" data-swiper-parallax-duration="2500" data-swiper-parallax-y="-300">
                    <div class="container md:w-[90%] mx-auto px-4">
                        <div class="text-4xl max-sm:text-2xl text-white font-poppins font-medium leading-[1.3]">{!! $page['title'] !!}</div>
                        @if (isset($page['button']) && $page['button'] !== "#")
                        <div class="mt-10">
                            <a href="#" class="p-3.5 bg-orange-500 hover:bg-orange-600 rounded-xl font-poppins text-sm text-white transition duration-150 ease-out hover:ease-in">
                                Showroom Virtual 360
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if (count($pages) > 1)
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    @endif
</div>