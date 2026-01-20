<div class="wrap-title-fashion-men-header-admin-view d-flex">
    <div class="left-model-detail-fashion-men-header-admin-view">
        <img class="img-model w-100"
            src="//cdn.hstatic.net/products/200000690725/595913189_1278756820964563_6438612972851276560_n_c14be49bb87e437f951df031135d2c60_master.jpg"
            alt="">
    </div>

    <div class="detail-title-fashion-men-header-admin-view d-grid gap-4 p-3">
        <ul class="d-flex flex-column list-unstyled">
            <li class="title-item-detail-fashion-men-header-admin-view mb-2 pb-1">
                <a href="">SET ĐỒ NAM</a>
            </li>
            @foreach ($datSetProduct['male_set_product_name'] as $setproduct)
                <li class="item-detail-fashion-men-header-admin-view pt-1">
                    <a href="">{{ $setproduct['set_product_name'] }}</a>
                </li>
            @endforeach
        </ul>
        @foreach ($dataCategory['catgory_men'] as $key => $item)
            <ul class="d-flex flex-column list-unstyled">
                <li class="title-item-detail-fashion-men-header-admin-view mb-2 pb-1">
                    <a href="">{{ $key }}</a>
                </li>
                @foreach ($item['style_category'] as $categoryStyle)
                    <li class="item-detail-fashion-men-header-admin-view pt-1">
                        <a href="">{{ $categoryStyle }}</a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>

    <div class="right-model-detail-fashion-men-header-admin-view">
        <img class="img-model w-100" src="//theme.hstatic.net/200000690725/1001078549/14/home_category_2_img.jpg?v=1046"
            alt="">
    </div>

</div>
