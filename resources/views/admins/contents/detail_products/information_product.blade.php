<div class="container-inforamtion-product-adnim-view d-flex flex-column gap-2 p-2">
    <div class="content-information-product-admin-view d-flex gap-5">
        <div class="image-zone-detail-product-admin-view d-flex flex-column gap-2">
            <div class="image-detail-product-admin-view">
                <img class="w-100 h-100" src="{{ $detailProduct['product_image'] }}" alt="">
            </div>
            <div class="wrap-image-description-product d-flex w-100">
                <button class="btn-move-detail-product-admin-view left"
                    id="id-btn-move-left-detail-product-admin-view">&#10094</button>
                <ul class="list-image-description-detail-product-admin-view w-100 d-flex gap-2 list-unstyle m-0 p-0">
                    @foreach ($optionProduct as $value)
                        @foreach ($value as $item)
                            @foreach ($item['image_decription_option'] as $image)
                                <li class="item-image-description-detail-product-admin-view d-flex gap-2">
                                    <img class="image-description-detail-product-admin-view" src="{{ $image }}"
                                        alt="">
                                </li>
                            @endforeach
                        @endforeach
                    @endforeach
                </ul>
                <button class="btn-move-detail-product-admin-view right"
                    id="id-btn-move-right-detail-product-admin-view">&#10095</button>
            </div>
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
            @foreach ($optionProduct as $key => $value)
                <div class="detail-product-type-option-admin-view d-flex flex-column w-100">
                    <h5 class="m-0 p-0">{{ $key }}</h5>
                    <div class="detail-product-name-option-admin-view d-flex gap-3 pt-3">
                        @foreach ($value as $item)
                            <span class="p-2">{{ $item['option_name'] }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="detail-product-add-zone-admin-view d-flex w-100 gap-3 pt-2">
                <div class="quantity-zone-detail-product-admin-view d-flex gap-2">
                    <button class="btn-minus-detail-product-admin-view">-</button>
                    <input type="text" class="input-quantity-detail-product-admin-view" readonly value="1">
                    <button class="btn-plus-detail-product-admin-view">+</button>
                </div>
                <div class="add-zone-detail-product-admin-view d-flex">
                    <button class="add-product-detail-product-admin-view">Thêm vào giỏ hàng</button>
                </div>

            </div>
        </div>
    </div>
</div>
