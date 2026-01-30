@extends('admins.master_view')
@section('main-content-admin-view')
    <div class="wrap-detail-product-content-admin-view w-100 d-flex gap-4 p-3 justify-content-center">
        <div class="wrap-information-detail-product-admin-view d-flex flex-column">
            @include('admins.contents.detail_products.information_product')
        </div>
        <div class="wrap-related-detail-product-admin-view p-3">
            @include('admins.contents.detail_products.related_product')
        </div>
    </div>
@endsection
