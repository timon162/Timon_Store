<div class="wrap-content-hot-product-admin-home w-100 d-flex align-items-center flex-column gap-3">
    <div class="title-hot-product-admin-home w-100 d-flex align-items-center flex-column gap-2">
        <h2>Sản Phẩm Nổi Bật</h2>
        <span class="line-gap d-flex"></span>
    </div>
    <div class="wrap-list-hot-product-admin-home d-flex">
        <button class="btn-move left" id="id-btn-move-left-hot-product-admin-home">&#10094</button>
        <ul class="list-hot-product-admin-home d-flex list-unstyle">
            @foreach ($hotProduct as $item)
                <li class="item-hot-product-admin-home d-flex flex-column gap-3">
                    <div class="img-hot-product-admin-home d-flex">
                        <a href="{{ route('detail-product', ['id' => $item['id']]) }}">
                            <img src="{{ $item['product_image'] }}" alt="" class="w-100 h-100">
                        </a>
                    </div>

                    <div class="name-hot-product-admin-home w-100 d-flex">
                        <h3>{{ $item['product_name'] }}</h3>
                    </div>

                    <div
                        class="price-and-quantity-hot-product-admin-home w-100 d-flex justify-content-between align-items-center">
                        <h3>{{ $item['product_price'] }}</h3>
                        <span>Số lượng: {{ $item['product_quantity'] }}</span>
                    </div>
                </li>
            @endforeach
        </ul>
        <button class="btn-move right" id="id-btn-move-right-hot-product-admin-home">&#10095</button>
    </div>
</div>
