<div class="container-header-admin-view pt-2">
    <div class="left-header-admin-view">
        <div class="logo-zone-header-admin-view">
            <a href="{{ route('admin.home') }}" class="logo-web-header-admin-view">
                TIMON STORE
            </a>
        </div>
    </div>

    <div class="center-header-admin-view d-flex flex-column justify-content-center align-items-center gap-2">
        <div class="up-center-header-admin-view w-100 d-flex justify-content-between align-items-center gap-5">
            <div class="hotline-zone-header-admin-view d-flex justify-content-center align-items-center gap-2">
                <i class='bx bxs-phone'></i>
                <span>HOTLINE</span>
                <span class="fw-bold">0948887959</span>
            </div>
            <div class="location-zone-header-admin-view d-flex justify-content-center align-items-center gap-2">
                <i class='bx  bxs-location-alt' style='color:#191818'></i>
                <span>Location</span>
                <span class="fw-bold">TP.Hồ Chí Minh</span>
            </div>
            <div class="search-zone-header-admin-view d-flex justify-content-center align-items-center">
                <input type="text" placeholder="Tìm sản phẩm ..." class="input-search-header-admin-view">
                <i class='icon-search-header-admin-view bx  bx-search'></i>
            </div>
        </div>
        <div class="down-center-header-admin-view d-flex justify-content-center align-items-center">
            <ul
                class="list-title-header-admin-view d-flex justify-content-center align-items-center gap-5 pt-2 m-0 list-unstyled ">
                <li class="item-list-title-header-admin-view d-flex gap-2 mt-1">
                    <a href="{{ route('admin.home') }}">TRANG CHỦ</a>
                </li>
                <li class="item-list-title-header-admin-view">
                    <div class="title-header-admin-view d-flex gap-2">
                        <a href="">THỜI TRANG NỮ</a>
                        <span>&#10095</span>
                    </div>
                    <div class="detail-title-header-admin-view p-3">
                        @include('admins.partials.detail_title_headers.detail_title_women_fashion')
                    </div>
                </li>
                <li class="item-list-title-header-admin-view">
                    <div class="title-header-admin-view d-flex gap-2">
                        <a href="">THỜI TRANG NAM</a>
                        <span>&#10095</span>
                    </div>
                    <div class="detail-title-header-admin-view p-3">
                        @include('admins.partials.detail_title_headers.detail_title_men_fashion')
                    </div>
                </li>
                <li class="item-list-title-header-admin-view">
                    <div class="title-header-admin-view d-flex gap-2">
                        <a href="">BỘ SƯU TẬP</a>
                        <span>&#10095</span>
                    </div>
                    <div class="detail-title-header-admin-view p-3">
                        @include('admins.partials.detail_title_headers.detail_title_album_fashion')
                    </div>
                </li>
                <li class="item-list-title-header-admin-view">
                    <div class="title-header-admin-view d-flex gap-2">
                        <a href="">TIN TỨC THỜI TRANG</a>
                        <span>&#10095</span>
                        <div class="detail-title-header-admin-view">
                            <div class="detail-title-fashion-news-header-admin-view d-grid">
                                <ul class="d-flex flex-column list-unstyled gap-2">
                                    <li class="title-item-detail-fashion-news-header-admin-view d-flex">
                                        <a href="https://www.elle.vn/thoi-trang/tin-thoi-trang/?gad_source=1&gad_campaignid=23082768195&gbraid=0AAAAACxHtbwhyGcPL84RWXPdceS5v3nPL&gclid=Cj0KCQiAprLLBhCMARIsAEDhdPdO-e5CKYqYrmm9XZy51HD0SR_G-JUqV7tmoCKvn-luwOcFxuiIOboaAmSBEALw_wcB"
                                            class="d-flex align-items-center p-3">Tin tức thời trang thế
                                            giới</a>
                                    </li>
                                    <li class="title-item-detail-fashion-news-header-admin-view d-flex">
                                        <a href="https://vnexpress.net/giai-tri/thoi-trang"
                                            class="d-flex align-items-center p-3">Tin tức thời trang trong
                                            nước</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="service-user-header-admin-view d-flex justify-content-center align-items-center gap-4">
        <div class="wrap-icon-service-user-header-admin-view d-flex justify-content-center align-items-center">
            <a href="#"
                class="item-icon-service-user-header-admin-view d-flex flex-column justify-content-center align-items-center">
                <div class="icon-service-user-header-admin-view d-flex justify-content-center align-items-center">
                    <i class='bx  bx-heart'></i>
                </div>
                <span
                    class="munber-check-icon-service-user-header-admin-view d-flex justify-content-center align-items-center">0</span>
                <span class="name-icon-service-user-header-admin-view">Yêu thích</span>
            </a>
        </div>
        <div class="wrap-icon-service-user-header-admin-view d-flex justify-content-center align-items-center">
            <a href="#"
                class="item-icon-service-user-header-admin-view d-flex flex-column justify-content-center align-items-center">
                <div class="icon-service-user-header-admin-view d-flex justify-content-center align-items-center">
                    <i class='bx  bx-user'></i>
                </div>

                <span class="name-icon-service-user-header-admin-view">Tài khoản</span>
            </a>
        </div>
        <div class="wrap-icon-service-user-header-admin-view d-flex justify-content-center align-items-center">
            <a href="#"
                class="item-icon-service-user-header-admin-view d-flex flex-column justify-content-center align-items-center">
                <div class="icon-service-user-header-admin-view d-flex justify-content-center align-items-center">
                    <i class='bx  bx-shopping-bag'></i>
                </div>
                <span
                    class="munber-check-icon-service-user-header-admin-view d-flex justify-content-center align-items-center">0</span>
                <span class="name-icon-service-user-header-admin-view">Giỏ hàng</span>
            </a>
        </div>
    </div>
</div>
