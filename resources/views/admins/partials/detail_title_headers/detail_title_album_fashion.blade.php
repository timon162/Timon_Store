<div class="wrap-title-fashion-album-header-admin-view d-flex">
    <div class="left-model-detail-fashion-album-header-admin-view">
        <img class="img-model w-100"
            src="//bizweb.dktcdn.net/100/462/587/themes/880841/assets/mega-1-image-2.jpg?1764605723305" alt="">
    </div>

    <div class="detail-title-fashion-album-header-admin-view d-grid gap-4 p-3">

        @foreach ($dataAlbumProduct as $key => $item)
            <ul class="d-flex flex-column list-unstyled">
                <li class="title-item-detail-fashion-album-header-admin-view mb-2 pb-1">
                    <a href="">{{ $key }}</a>
                </li>
                @foreach ($item as $setProduct)
                    <li class="item-detail-fashion-album-header-admin-view pt-1">
                        <a href="{{ route('set-product', ['id' => $setProduct['album_id']]) }}"
                            data-id-set-Product=`{{ $setProduct['album_id'] }}`>{{ $setProduct['album_name'] }}</a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>

    <div class="right-model-detail-fashion-album-header-admin-view">
        <img class="img-model w-100" src="//theme.hstatic.net/200000690725/1001078549/14/home_category_2_img.jpg?v=1046"
            alt="">
    </div>
</div>
