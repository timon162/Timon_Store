<div class="container-related-product-admin-view d-flex flex-column gap-3">
    <div class="title-related-product-admin-view d-flex w-100 justify-content-center align-items-center">
        <p class="d-flex p-0 m-0">SẢN PHẨM LIÊN QUAN</p>
    </div>
    <div class="wrap-list-related-product-admin-view w-100">
        <ul class="list-related-product-admin-view w-100 d-flex flex-column gap-3 list-unstyled m-0 p-0">
            @foreach ($relatedProduct as $item)
                <li class="item-related-product-admin-view d-flex gap-3">
                    <a href="{{ route('detail-product', ['id' => $item['id']]) }}"
                        class="image-item-related-product-admin-view">
                        <img class="w-100 h-100" src="{{ $item['product_image'] }}" alt="">
                    </a>

                    <div class="infor-item-related-product-admin-view d-flex flex-column gap-2">
                        <span>{{ $item['product_name'] }}</span>
                        <p class="p-0 m-0">{{ $item['product_price'] }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
