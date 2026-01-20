<?php

namespace App\Services;

use App\Services\Interfaces\PartialInterfaceService;
use Illuminate\Support\Facades\Storage;

class PartialService implements PartialInterfaceService
{
    public function imgBannerAdminHome(): array
    {
        $files = Storage::disk('public')->files('img_banner_homes');
        return array_map(function ($file) {
            return asset('storage/' . $file);
        }, $files);
    }
}
