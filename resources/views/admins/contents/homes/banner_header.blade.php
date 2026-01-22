 <div class="wrap-list-banner-admin-home d-flex flex-column gap-2">
     <div class="list-banner-admin-home d-flex">
         @foreach ($imgBannerAdminHome as $key => $item)
             <div class="item-banner-admin-home d-flex" data-id-item-banner-admin-home="{{ $key }}">
                 <a href="" class="link-banner-admin-home w-100">
                     <img src="{{ $item }}" alt="" class="w-100 h-100">
                 </a>
             </div>
         @endforeach
     </div>
     <div class="wrap-list-point-select-item-banner-admin-home d-flex w-100 justify-content-center">
         <ul
             class="list-point-select-item-banner-admin-home d-flex  align-items-center justify-content-center list-unstyled">
             @foreach ($imgBannerAdminHome as $key => $item)
                 <li class="point-select-item-banner-admin-home d-flex justify-content-center align-items-center"
                     value="{{ $key }}"></li>
             @endforeach
         </ul>
     </div>
 </div>
