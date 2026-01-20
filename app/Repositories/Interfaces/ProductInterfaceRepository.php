<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface ProductInterfaceRepository
{
    public function getSetProductBuyGender(int $gender): Collection;
    public function getNameDetailAlbumProduct(): Collection;
    public function getHotProduct(): Collection;
}
