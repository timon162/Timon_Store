<div class="menu-category-style-admin-view d-flex flex-column gap-3">
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
</div>
