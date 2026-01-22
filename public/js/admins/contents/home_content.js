$(document).ready(function () {
    $(".point-select-item-banner-admin-home").each(function () {
        if ($(this).val() == 0) {
            $(this).addClass("active-item-banner-admin-home");
        }
    });
});

$(".list-point-select-item-banner-admin-home").on(
    "click",
    ".point-select-item-banner-admin-home",
    function (e) {
        e.preventDefault();

        const valuePoint = $(this).val();

        const item = $(this).closest(".wrap-list-banner-admin-home");

        const itemBanner = item.find(".item-banner-admin-home");

        $(".point-select-item-banner-admin-home").removeClass(
            "active-item-banner-admin-home"
        );
        $(this).addClass("active-item-banner-admin-home");

        itemBanner.each(function (i) {
            if (valuePoint == $(this).data("id-item-banner-admin-home")) {
                $(".item-banner-admin-home").removeClass(
                    "active-item-banner-admin-home"
                );
                $(this).addClass("active-item-banner-admin-home");
            }
        });
    }
);

let indexMove = 0;
let sizeHotImg = 310;

$("#id-btn-move-right-hot-product-admin-home").on("click", function (e) {
    e.preventDefault();
    const silder = $(".list-hot-product-admin-home");
    const maxIndex = silder.find("li").length - 4;

    if (indexMove < maxIndex) {
        indexMove++;
        $(".list-hot-product-admin-home").css(
            "transform",
            `translateX(-${indexMove * sizeHotImg}px)`
        );
    } else {
        $(".list-hot-product-admin-home").css("transform", `translateX(0px)`);
        indexMove = 0;
    }
    console.log(indexMove, indexMove * sizeHotImg);
});

$("#id-btn-move-left-hot-product-admin-home").on("click", function (e) {
    e.preventDefault();
    const silder = $(".list-hot-product-admin-home");
    const maxIndex = silder.find("li").length - 4;

    if (indexMove > 0) {
        indexMove--;
        $(".list-hot-product-admin-home").css(
            "transform",
            `translateX(-${indexMove * sizeHotImg}px)`
        );
    } else {
        $(".list-hot-product-admin-home").css(
            "transform",
            `translateX(-${maxIndex * sizeHotImg}px)`
        );
        indexMove = maxIndex;
    }
});
