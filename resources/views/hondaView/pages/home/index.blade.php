@extends('hondaView.layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="grid grid-cols-3 max-sm:grid-cols-1">
    <div class="grid">
        <div class="relative group">
            <video class="w-full h-full aspect-w-video aspect-h-video bg-black video-play" muted>
                <source src="{{ asset('assets/honda/img/preview-mobilio.mp4') }}" type="video/mp4" class="">
                Your browser does not support the video tag.
            </video>
            <div class="absolute top-[40%] max-sm:top-[25%] left-[35%] max-sm:left-[30%] font-roboto text-center opacity-0 group-hover:opacity-100 transition duration-200 ease-out group-hover:ease-in">
                <div class="text-3xl mb-12 max-sm:mb-6 text-white font-vipnagorgialla uppercase">MPV</div>
                <a href="{{ route('showroom', ['bodymodel'=>'mpv']) }}">
                    <div class="border bg-white w-[150px] py-1.5 text-sm font-light hover:bg-gray-100 active:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100">ENTER</div>
                </a>
            </div>
        </div>
    </div>
    <div class="grid">
        <div class="relative group">
            <video class="w-full h-full aspect-w-video aspect-h-video bg-black video-play" muted>
                <source src="{{ asset('assets/honda/img/preview-n7x.mp4') }}" type="video/mp4" class="">
                Your browser does not support the video tag.
            </video>
            <div class="absolute top-[40%] max-sm:top-[25%] left-[35%] max-sm:left-[30%] font-roboto text-center opacity-0 group-hover:opacity-100 transition duration-200 ease-out group-hover:ease-in">
                <div class="text-3xl mb-12 max-sm:mb-6 text-white font-vipnagorgialla uppercase">SUV</div>
                <a href="{{ route('showroom', ['bodymodel'=>'suv']) }}">
                    <div class="border bg-white w-[150px] py-1.5 text-sm font-light hover:bg-gray-100 active:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100">ENTER</div>
                </a>
            </div>
        </div>
    </div>
    <div class="grid grid-rows-3 relative group">
        <div>
            <video class="w-full h-full aspect-w-video aspect-h-video bg-black video-play" muted>
                <source src="{{ asset('assets/honda/img/preview-typeR.mp4') }}" type="video/mp4" class="">
                Your browser does not support the video tag.
            </video>
        </div>
        <div>
            <video class="w-full h-full aspect-w-video aspect-h-video bg-black video-play" muted>
                <source src="{{ asset('assets/honda/img/preview-cityHatchback.mp4') }}" type="video/mp4" class="">
                Your browser does not support the video tag.
            </video>
        </div>
        <div>
            <video class="w-full h-full aspect-w-video aspect-h-video bg-black video-play" muted>
                <source src="{{ asset('assets/honda/img/preview-city.mp4') }}" type="video/mp4" class="">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="absolute top-[40%] left-[35%] max-sm:left-[30%] font-roboto text-center opacity-0 group-hover:opacity-100 transition duration-200 ease-out group-hover:ease-in">
            <div class="text-3xl mb-12 max-sm:mb-6 text-white font-vipnagorgialla uppercase">Others</div>
            <a href="{{ route('showroom', ['bodymodel'=>'others']) }}">
                <div class="border bg-white w-[150px] py-1.5 text-sm font-light hover:bg-gray-100 active:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100">ENTER</div>
            </a>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection