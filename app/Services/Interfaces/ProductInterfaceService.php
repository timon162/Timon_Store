<?php

namespace App\Services\Interfaces;

interface ProductInterfaceService
{
    public function getNameSetProduct(): array;

    public function getNameDetailAlbumProduct(): array;

    public function getHotProduct(): array;
}
