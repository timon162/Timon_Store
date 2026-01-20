<?php

if (!function_exists('format_price')) {
    function format_price(int $price): string
    {
        return number_format($price, 0, ',', '.') . 'đ';
    }
}
