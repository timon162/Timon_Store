<div class="menu-category-style-admin-view d-flex flex-column">
    <div class="wrap-item-menu-category-style-admin-view d-flex flex-column gap-2 p-3">
        <span class="title-menu-category-style-admin-view">Thương hiệu</span>
        <ul class="list-unstyle p-0 m-0">
            @foreach ($supplier as $key => $item)
                <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                    <input type="checkbox">
                    <span class="name-supplier-category-style-admin-view">{{ $key }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="wrap-item-menu-category-style-admin-view d-flex flex-column gap-2 p-2">
        <span class="title-menu-category-style-admin-view">Mức giá</span>
        <ul class="list-item-menu-category-style-admin-view list-unstyle d-flex flex-column p-0 m-0 gap-3">
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">Dưới 200.000đ</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">Từ 200.000đ - 400.000đ</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">Từ 400.000đ - 600.000đ</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">Từ 600.000đ - 800.000đ</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">Từ 800.000đ - 1 triệu</span>
            </li>
        </ul>
    </div>
    <div class="wrap-item-menu-category-style-admin-view d-flex flex-column gap-2 p-2">
        <span class="title-menu-category-style-admin-view">Kích Thước</span>
        <ul class="list-item-menu-category-style-admin-view list-unstyle d-flex flex-column p-0 m-0 gap-3">
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">XS</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">S</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">M</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">L</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">XL</span>
            </li>
        </ul>
    </div>
    <div class="wrap-item-menu-category-style-admin-view d-flex flex-column gap-2 p-2">
        <span class="title-menu-category-style-admin-view">Màu sắc</span>
        <ul class="list-item-menu-category-style-admin-view list-unstyle d-flex flex-column p-0 m-0 gap-3">
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">Nâu</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">Vàng</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">Xanh lá</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">Rêu</span>
            </li>
            <li class="item-menu-category-style-admin-view d-flex align-items-center gap-2">
                <input type="checkbox">
                <span class="name-supplier-category-style-admin-view">Xanh dương</span>
            </li>
        </ul>
    </div>
</div>
