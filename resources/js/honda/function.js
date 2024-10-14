// core version + navigation, pagination modules:
import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    Parallax,
    EffectCoverflow,
    FreeMode,
    Thumbs,
} from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/effect-coverflow";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/thumbs";
import "swiper/css/free-mode";

import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

const NavTabs = {
    tab: function() {
        let tab = document.querySelectorAll(".nav-tabs li button");

        if (tab) {
            tab.forEach(element => {
                element.addEventListener("click", function() {
                    tab.forEach(el => {
                        el.classList.remove("active");
                        let atr = el.getAttribute("data-target");
                        document.querySelector("#"+atr).classList.add("hidden");
                    });
                    element.classList.add("active");
    
                    let attr = element.getAttribute("data-target");
                    document.querySelector("#"+attr).classList.remove("hidden");
                    $(".lazy").Lazy({});
                });
            });
        }
    }
}

const PhotoFancy = {
    vehicleModel: function () {
        let tabs = document.querySelectorAll("#gallery-tab li button");
        if (tabs) {
            tabs.forEach(element => {
                element.addEventListener("click", () => {
                    $(".lazy").Lazy({});
                });
            });
    
            let arr = ['exterior', 'interior', 'fitur', 'video'];
            arr.forEach(element => {
                Fancybox.bind('[data-fancybox="'+element+'"]', {
                    Thumbs : {
                      type: "modern"
                    }
                });
            });
        }
    },
    gallery: function() {
        let tabs = document.querySelectorAll("#gallery-tab li button");
        if (tabs) {
            tabs.forEach(element => {
                element.addEventListener("click", () => {
                    $(".lazy").Lazy({});
                });
            });
    
            let arr = ['foto', 'album', 'video'];
            arr.forEach(element => {
                Fancybox.bind('[data-fancybox="'+element+'"]', {
                    Thumbs : {
                      type: "modern"
                    }
                });
            });
        }
    }
}

const MySlider = {
    banner: function () {
        let banner = document.querySelector(".myBanners");
        if (banner) {            
            new Swiper(".myBanners", {
                lazy: true,
                loop: true,
                autoplay: true,
                speed: 1000,
                parallax: true,
                dynamicBullets: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                // configure Swiper to use modules
                modules: [Navigation, Parallax, Autoplay],
            });
        }
    },
    vehicle: function () {
        var mySwiper = new Swiper(".swiper-container", {
            effect: "coverflow",
            loop: true,
            speed: 1000,
            grabCursor: false,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5,
                slideShadows: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            modules: [Navigation, EffectCoverflow],
            on: {
                click(event) {
                    mySwiper.slideTo(this.clickedIndex);
                },
            },
        });
    },
    thumbs: function () {
        let thumb = document.querySelector(".mySwiperThumbs");
        if(thumb) {
            var swiper = new Swiper(".mySwiperThumbs", {
                loop: true,
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
                modules: [Navigation, FreeMode, Thumbs],
            });
            var swiper2 = new Swiper(".mySwiperShow", {
                loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
                modules: [Navigation, FreeMode, Thumbs],
            });
        }
    },
    promos: function () {
        var promo = new Swiper(".swiper-promo", {
            loop: true,
            speed: 1000,
            slidesPerView: 3,
            centeredSlides: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                480: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 3,
                },
            },
            modules: [Navigation],
        });

        var review = new Swiper(".review-google", {
            speed: 1000,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
            },
            modules: [Navigation],
        });
    },
};

const BannerVideoPlay = {
    init: function () {
        let videos = document.querySelectorAll(".video-play");

        videos.forEach((element) => {
            element.addEventListener("mouseover", function () {
                element.play();
            });
            element.addEventListener("mouseleave", function () {
                element.pause();
            });
        });
    },
};

const Textmore = {
    collapse: function() {
        let textMore = document.querySelector(".text-collapse");
        let btnTextMore = document.querySelector("#btn-text-more");

        if (textMore) {
            btnTextMore.addEventListener("click", () => {
                textMore.classList.toggle("line-clamp-3");
                
                btnTextMore.innerHTML = textMore.classList.contains("line-clamp-3") ? "Baca Selengkapnya" : "Tutup Selengkapnya";
            });
        }
    }
};

const FooterButtonFixed = {
    init: function () {
        this.actionButton();
    },
    actionButton: function () {
        let button = document.querySelectorAll(".smart-button button");
        let content = document.querySelectorAll(".smart-content");

        button.forEach((element) => {
            element.addEventListener("click", function () {
                var target = element.getAttribute("data-target");

                // disable content smart button drawer
                content.forEach((elmt) => {
                    var translateX =
                        screen.width <= 640
                            ? "translate-y-[500px]"
                            : "translate-y-[400px]";
                    if (target == elmt.id) {
                        elmt.classList.remove(translateX);
                        elmt.classList.toggle("translate-y-0");
                    } else {
                        elmt.classList.remove("translate-y-0");
                        elmt.classList.remove(translateX);
                    }
                });
            });
        });
    },
};

const Loading = {
    show: function () {
        document.querySelector("body").style.overflow = "hidden";
        $("#pre-loader").show();
    },
    hide: function (timeout) {
        setTimeout(() => {
            $("#pre-loader").hide();
            document.querySelector("body").style.overflow = "auto";
        }, timeout);
    },
};

const Lazyload = {
    init: function () {
        $(".lazy").Lazy({
            scrollDirection: "vertical",
            effect: "fadeIn",
            effectTime: 1000,
            threshold: 0,
            visibleOnly: true,
            // beforeLoad: function (element) {
            //     console.log("on Load "+ element.data("src"));
            // },
            onError: function (element) {
                console.log("error loading " + element.data("src"));
            },
        });
    },
};

const Buttons = {
    click: function() {
        let btn = document.querySelectorAll(".buttons-click");

        if (btn) {
            btn.forEach(element => {
                element.addEventListener("click", function() {
                    let div = document.querySelector("#"+element.id+" div");
                    let tel = document.querySelector("#"+element.id+" a");
                    
                    div.classList.toggle("hidden");
                    tel.classList.toggle("hidden");
                });
            });
        }
    }
}

export {
    MySlider,
    FooterButtonFixed,
    Textmore,
    BannerVideoPlay,
    Loading,
    Lazyload,
    PhotoFancy,
    NavTabs,
    Buttons
};
