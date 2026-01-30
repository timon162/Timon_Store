<div class="product-category-style-admin-view d-flex flex-column gap-3">
    @foreach ($product as $key => $value)
        <div class="title-product-category-style-admin-view d-flex w-100">
            <span class="p-2">{{ $key }}</span>
        </div>
        <div class="wrap-content-product-category-style-admin-view w-100 d-flex flex-column">
            <ul class="list-content-product-category-style-admin-view w-100 d-grid list-unstyle gap-4 p-0 m-0">
                @foreach ($value as $item)
                    <li
                        class="item-content-product-category-style-admin-view w-100 d-flex flex-column justify-content-between gap-3 align-items-center">
                        <div class="img-content-product-category-style-admin-view w-100 d-flex">
                            <a href="{{ route('detail-product', ['id' => $item['id']]) }}">
                                <img src="{{ $item['product_image'] }}" alt="" class="w-100 h-100">
                            </a>
                        </div>

                        <div class="name-content-product-category-style-admin-view w-100 d-flex">
                            <h3>{{ $item['product_name'] }}</h3>
                        </div>

                        <div
                            class="price-and-quantity-content-product-category-style-admin-view w-100 d-flex justify-content-between align-items-center">
                            <h3>{{ $item['product_price'] }}</h3>
                            <span>Số lượng: {{ $item['product_quantity'] }}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach

</div>
