@extends('hondaView.layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="">
    @include('hondaView.components.breadcrumb', [ 'routes' => [
    ['title' => 'Home', 'route' => route('home')],
    ['title' => 'Showroom', 'route' => route('showroom', ['bodymodel' => \Request::route('bodymodel')])],
    ['title' => 'Detail list tipe '.\Request::segment(count(\Request::segments())), 'route' => '#']
    ] ])
</div>

<div class="container md:w-[90%] mx-auto px-4 font-roboto my-12">
    <div class="tab-model-detail">
        <a href="{{ route('modeldetail', ['bodymodel' => \Request::route('bodymodel'), 'modelspec' => 'detail', 'modeltype' => \Request::route('modeltype')]) }}" class="{{ \Request::route('modelspec') == 'detail' ? 'active' : '' }}">Detail</a>
        <a href="{{ route('modeldetail', ['bodymodel' => \Request::route('bodymodel'), 'modelspec' => 'foto', 'modeltype' => \Request::route('modeltype')]) }}" class="{{ \Request::route('modelspec') == 'foto' ? 'active' : '' }}">Foto & Video</a>
        <a href="{{ route('modeldetail', ['bodymodel' => \Request::route('bodymodel'), 'modelspec' => 'spesifikasi', 'modeltype' => \Request::route('modeltype')]) }}" class="{{ \Request::route('modelspec') == 'spesifikasi' ? 'active' : '' }}">Spesifikasi</a>
    </div>
</div>

@if(Str::contains(\Request::route('modelspec'), 'detail'))
    @include("hondaView.pages.home._vehicle-detail")
@elseif(Str::contains(\Request::route('modelspec'), 'foto'))
    @include("hondaView.pages.home._vehicle-foto")
@elseif(Str::contains(\Request::route('modelspec'), 'spesifikasi'))
    @include("hondaView.pages.home._vehicle-spesifikasi")
@endif

@endsection

@section('scripts')
<!-- import another js file -->
@endsection