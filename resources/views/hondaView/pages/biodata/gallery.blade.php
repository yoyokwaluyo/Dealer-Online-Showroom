@extends('hondaView.layouts.app')

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
@endsection

@section('main')

<x-honda.banners></x-honda.banners>

@include('hondaView.components.breadcrumb', [ 'routes' => [['title' => 'Home', 'route' => route('home')], ['title' => 'Gallery', 'route' => '#']] ])

<div class="container md:w-[90%] mx-auto px-4 font-roboto my-12">
    <div class="border border-gray-200 shadow-sm w-full p-4 rounded-md">
        <div class="text-xl font-medium">Gallery</div>
        <div class="my-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="gallery-tab" data-tabs-toggle="#gallery-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="foto-tab" data-tabs-target="#foto" type="button" role="tab" aria-controls="foto" aria-selected="false">Foto</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="album-tab" data-tabs-target="#album" type="button" role="tab" aria-controls="album" aria-selected="false">Album</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="video-tab" data-tabs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="false">Video</button>
                </li>
            </ul>
        </div>
        <div id="gallery-tab-content">
            <div class="hidden md:p-4 rounded-lg" id="foto" role="tabpanel" aria-labelledby="foto-tab">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <a href="https://static.rajamobil.com/resize/942x412/media/images/databasemobil/mobilbaru/exterior/7686/1632287048-Exterior---1.jpg" data-fancybox="foto">
                            <img data-src="https://static.rajamobil.com/resize/942x412/media/images/databasemobil/mobilbaru/exterior/7686/1632287048-Exterior---1.jpg" alt="image" class="lazy w-auto max-w-full h-auto max-h-[200px] object-contain">
                        </a>
                    </div>
                    <div>
                        <a href="https://static.rajamobil.com/resize/942x412/media/images/databasemobil/mobilbaru/exterior/7686/1632287048-Exterior---3.jpg" data-fancybox="foto">
                            <img data-src="https://static.rajamobil.com/resize/942x412/media/images/databasemobil/mobilbaru/exterior/7686/1632287048-Exterior---3.jpg" alt="image" class="lazy w-auto max-w-full h-auto max-h-[200px] object-contain">
                        </a>
                    </div>
                    <div>
                        <a href="https://static.rajamobil.com/resize/942x412/media/images/databasemobil/mobilbaru/exterior/7686/1708484740-Exterior---1-copy-20.jpg" data-fancybox="foto">
                            <img data-src="https://static.rajamobil.com/resize/942x412/media/images/databasemobil/mobilbaru/exterior/7686/1708484740-Exterior---1-copy-20.jpg" alt="image" class="lazy w-auto max-w-full h-auto max-h-[200px] object-contain">
                        </a>
                    </div>
                    <div>
                        <a href="https://static.rajamobil.com/resize/942x412/media/images/databasemobil/mobilbaru/exterior/7686/1632287048-Exterior---2.jpg" data-fancybox="foto">
                            <img data-src="https://static.rajamobil.com/resize/942x412/media/images/databasemobil/mobilbaru/exterior/7686/1632287048-Exterior---2.jpg" alt="image" class="lazy w-auto max-w-full h-auto max-h-[200px] object-contain">
                        </a>
                    </div>
                    <div>
                        <a href="https://static.rajamobil.com/resize/942x412/media/images/databasemobil/mobilbaru/exterior/7686/1632287048-Exterior---4.jpg" data-fancybox="foto">
                            <img data-src="https://static.rajamobil.com/resize/942x412/media/images/databasemobil/mobilbaru/exterior/7686/1632287048-Exterior---4.jpg" alt="image" class="lazy w-auto max-w-full h-auto max-h-[200px] object-contain">
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden md:p-4 rounded-lg" id="album" role="tabpanel" aria-labelledby="album-tab">
                <div class="flex flex-wrap gap-4">
                    <div class="relative">
                        <img data-src="https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/U2gucCaUhjTIz0zf4nAW89xHLySnhDV1.jpg" alt="image" class="lazy w-auto h-[200px] brightness-[90%] object-contain mx-auto cursor-pointer album-foto" data-target="gallery_1">
                        <i class='bx bx-windows text-2xl text-white absolute top-0 right-1'></i>
                        <div class="hidden">
                            <div class="gallery_1">https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/U2gucCaUhjTIz0zf4nAW89xHLySnhDV1.jpg</div>
                            <div class="gallery_1">https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/NcKK1M-kzxfajsKScdAC9t1Dl4L9BbpR.jpg</div>
                            <div class="gallery_1">https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/zbIeXL0yZnMmbfB9ATXwlc5QWqCTUTjz.jpg</div>
                            <div class="gallery_1">https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/jihG9q1yTHXyOXEo2cMVYx7Mj7hhOIdU.jpg</div>
                            <div class="gallery_1">https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/1o2YVzWhDYd0iLuev9WNlXWzTGd_To0b.jpg</div>
                        </div>
                    </div>
                    <div class="relative">
                        <img data-src="https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/U2gucCaUhjTIz0zf4nAW89xHLySnhDV1.jpg" alt="image" class="lazy w-auto h-[200px] brightness-[90%] object-contain mx-auto cursor-pointer album-foto" data-target="gallery_2">
                        <i class='bx bx-windows text-2xl text-white absolute top-0 right-1'></i>
                        <div class="hidden">
                            <div class="gallery_2">https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/U2gucCaUhjTIz0zf4nAW89xHLySnhDV1.jpg</div>
                            <div class="gallery_2">https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/NcKK1M-kzxfajsKScdAC9t1Dl4L9BbpR.jpg</div>
                            <div class="gallery_2">https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/zbIeXL0yZnMmbfB9ATXwlc5QWqCTUTjz.jpg</div>
                            <div class="gallery_2">https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/jihG9q1yTHXyOXEo2cMVYx7Mj7hhOIdU.jpg</div>
                            <div class="gallery_2">https://imgcdn.rajamobil.com/resize2/public/media/images/dealer/gallery/original/442/2020/09/30/1o2YVzWhDYd0iLuev9WNlXWzTGd_To0b.jpg</div>
                        </div>
                    </div>
                </div>
                <div class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <span class="font-medium">Data tidak ditemukan!</span>
                </div>
            </div>
            <div class="hidden md:p-4 rounded-lg" id="video" role="tabpanel" aria-labelledby="video-tab">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="relative">
                        <a href="https://www.youtube.com/embed/x1XkimZIgMU?fs=1&amp;autoplay=1" data-fancybox="video">
                            <img data-src="https://img.youtube.com/vi/x1XkimZIgMU/0.jpg" alt="image" class="lazy w-auto max-w-full h-auto">
                        </a>
                        <i class='bx bxl-youtube text-4xl text-white absolute top-[40%] left-[44%]'></i>
                    </div>
                    <div class="relative">
                        <a href="https://www.youtube.com/embed/J2drmvRDZTM?fs=1&amp;autoplay=1" data-fancybox="video">
                            <img data-src="https://img.youtube.com/vi/J2drmvRDZTM/0.jpg" alt="iamge" class="lazy w-auto max-w-full h-auto">
                        </a>
                        <i class='bx bxl-youtube text-4xl text-white absolute top-[40%] left-[44%]'></i>
                    </div>
                    <div class="relative">
                        <a href="https://www.youtube.com/embed/awAgu3U6s3k?fs=1&amp;autoplay=1" data-fancybox="video">
                            <img data-src="https://img.youtube.com/vi/awAgu3U6s3k/0.jpg" alt="image" class="lazy w-full max-w-full h-auto">
                        </a>
                        <i class='bx bxl-youtube text-4xl text-white absolute top-[40%] left-[44%]'></i>
                    </div>
                    <div class="relative">
                        <a href="https://www.youtube.com/embed/rKDyAuRLqPA?fs=1&amp;autoplay=1" data-fancybox="video">
                            <img data-src="https://img.youtube.com/vi/rKDyAuRLqPA/0.jpg" alt="image" class="lazy w-full max-w-full h-auto">
                        </a>
                        <i class='bx bxl-youtube text-4xl text-white absolute top-[40%] left-[44%]'></i>
                    </div>
                    <div class="relative">
                        <a href="https://www.youtube.com/embed/VpJElEhnKe4?fs=1&amp;autoplay=1" data-fancybox="video">
                            <img data-src="https://img.youtube.com/vi/VpJElEhnKe4/0.jpg" alt="image" class="lazy w-full max-w-full h-auto">
                        </a>
                        <i class='bx bxl-youtube text-4xl text-white absolute top-[40%] left-[44%]'></i>
                    </div>
                    <div class="relative">
                        <a href="https://www.youtube.com/embed/OdcCd3J854w?fs=1&amp;autoplay=1" data-fancybox="video">
                            <img data-src="https://img.youtube.com/vi/OdcCd3J854w/0.jpg" alt="image" class="lazy w-full max-w-full h-auto">
                        </a>
                        <i class='bx bxl-youtube text-4xl text-white absolute top-[40%] left-[44%]'></i>
                    </div>
                    <div class="relative">
                        <a href="https://www.youtube.com/embed/jNf_kf14wbI?fs=1&amp;autoplay=1" data-fancybox="video">
                            <img data-src="https://img.youtube.com/vi/jNf_kf14wbI/0.jpg" alt="image" class="lazy w-full max-w-full h-auto">
                        </a>
                        <i class='bx bxl-youtube text-4xl text-white absolute top-[40%] left-[44%]'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        let albums = document.querySelectorAll(".album-foto");
        
        albums.forEach(element => {
            element.addEventListener("click", function() {
                let attr = element.getAttribute('data-target');
                let files = document.querySelectorAll("."+attr);
                
                let arr = [];
                files.forEach(element => {
                    arr.push({
                        src: element.innerHTML
                    });
                });

                new Fancybox(
                    arr
                );
            });
        });
    });
</script>
@endsection