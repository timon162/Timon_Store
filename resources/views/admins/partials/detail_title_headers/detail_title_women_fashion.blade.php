<div class="wrap-title-fashion-women-header-admin-view d-flex">
    <div class="left-model-detail-fashion-women-header-admin-view">
        <img class="img-model w-100"
            src="//bizweb.dktcdn.net/100/462/587/themes/880841/assets/mega-1-image-1.jpg?1764605723305" alt="">
    </div>

    <div class="detail-title-fashion-women-header-admin-view d-grid gap-4 p-3">
        <ul class="d-flex flex-column list-unstyled">
            <li class="title-item-detail-fashion-men-header-admin-view mb-2 pb-1">
                <a href="">SET ĐỒ NỮ</a>
            </li>
            @foreach ($datSetProduct['female_set_product_name'] as $setproduct)
                <li class="item-detail-fashion-men-header-admin-view pt-1">
                    <a href="">{{ $setproduct['set_product_name'] }}</a>
                </li>
            @endforeach
        </ul>
        @foreach ($dataCategory['catgory_women'] as $key => $item)
            <ul class="d-flex flex-column list-unstyled">
                <li class="title-item-detail-fashion-women-header-admin-view mb-2 pb-1">
                    <a href="">{{ $key }}</a>
                </li>
                @foreach ($item['style_category'] as $categoryStyle)
                    <li class="item-detail-fashion-women-header-admin-view pt-1">
                        <a href="">{{ $categoryStyle }}</a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>

    <div class="right-model-detail-fashion-women-header-admin-view">
        <img class="img-model w-100"
            src="//bizweb.dktcdn.net/100/462/587/themes/880841/assets/mega-1-image-2.jpg?1764605723305" alt="">
    </div>
</div>
