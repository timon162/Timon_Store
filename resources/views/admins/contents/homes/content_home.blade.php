@extends('admins.master_view')
@section('main-content-admin-view')
    <div class="wrap-main-home-content-admin-view d-flex flex-column gap-3 pb-3">
        <div class="banner-home-admin-view w-100 d-flex">
            @include('admins.contents.homes.banner_header')
        </div>
        <div class="hot-product-home-admin-view w-100 d-flex">
            @include('admins.contents.homes.hot_product')
        </div>
    </div>
@endsection
