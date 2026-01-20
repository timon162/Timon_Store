<div class="wrap-content-hot-product-admin-home w-100 d-flex align-items-center flex-column gap-3">
    <div class="title-hot-product-admin-home w-100 d-flex align-items-center flex-column gap-2">
        <h2>Sản Phẩm Nổi Bật</h2>
        <span class="line-gap d-flex"></span>
    </div>
    <div class="wrap-list-hot-product-admin-home d-flex">
        <ul class="list-hot-product-admin-home d-flex list-unstyle">
            @foreach ($hotProduct as $item)
                <li class="item-hot-product-admin-home d-flex flex-column gap-3">
                    <div class="img-hot-product-admin-home d-flex">
                        <a href="">
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
    </div>
</div>
