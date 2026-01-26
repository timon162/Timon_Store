@extends('admins.master_view')
@section('main-content-admin-view')
    <div class="wrap-category-style-content-admin-view w-100 d-flex gap-3 p-3 justify-content-center">
        <div class="wrap-menu-category-style-admin-view d-flex flex-column align-items-center">
            @include('admins.contents.category_styles.menu_category')
        </div>
        <div class="wrap-product-category-style-admin-view">
            @include('admins.contents.category_styles.product_category_style')
        </div>
    </div>
@endsection
