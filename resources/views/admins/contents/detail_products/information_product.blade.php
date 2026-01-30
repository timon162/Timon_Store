<div class="container-inforamtion-product-adnim-view d-flex flex-column gap-2 p-2">
    <div class="content-information-product-admin-view d-flex gap-5">
        <div class="image-detail-product-admin-view">
            <img class="w-100 h-100" src="{{ $detailProduct['product_image'] }}" alt="">
        </div>
        <div class="infor-detail-product-admin-view d-flex flex-column gap-3">
            <h3>{{ $detailProduct['product_name'] }}</h3>
            <span>Mã: {{ $detailProduct['product_code'] }}</span>
            <div class="infor-supplier-detail-product d-flex align-items-center gap-4">
                <span>Thương hiệu: {{ $detailProduct['supplier_name'] }}</span>
                <span class="line-center"></span>
                <span>Tình trạng: {{ $detailProduct['product_status'] }}</span>
            </div>
            <h3 class="detail-product-price-admin-view pb-3">{{ $detailProduct['product_price'] }}</h3>
        </div>
    </div>
</div>
