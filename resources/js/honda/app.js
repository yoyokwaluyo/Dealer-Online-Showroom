"use strict"

import 'flowbite';
import { Loading, BannerVideoPlay, Textmore, FooterButtonFixed, MySlider, Lazyload, PhotoFancy, NavTabs, Buttons } from "./function";

import jQuery from 'jquery';
window.$ = jQuery;

$(function () {
    Loading.show();
    Loading.hide(500);
    FooterButtonFixed.init();
    Lazyload.init();
    MySlider.banner();
    NavTabs.tab();
    PhotoFancy.gallery();
    Buttons.click();
    
    let pathName = window.location.pathname;
    if (pathName === "/") BannerVideoPlay.init(); // function for homepage
    if (pathName.includes("showroom")) { // function for showroom page
        MySlider.vehicle();
        Textmore.collapse();
        PhotoFancy.vehicleModel();
    }
    if (["/service", "/service/booking", "/sparepart", "/body-paint"].includes(pathName)) { // function for service page
        MySlider.thumbs();
        MySlider.promos();
    }
});
