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
