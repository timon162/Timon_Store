<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TimonStoreCategorySeeder;
use Database\Seeders\TimonStoreCategoryStyleSeeder;
use Database\Seeders\TimonStoreSupplierSeeder;
use Database\Seeders\TimonStoreProductSeeder;
use Database\Seeders\TimonStoreSetProductSeeder;
use Database\Seeders\TimonStoreDetailSetProductSeeder;
use Database\Seeders\TimonStoreAlbumProductSeeder;
use Database\Seeders\TimonStoreDetailAlbumProductSeeder;
use Database\Seeders\TimonStoreTotalAlbumSeeder;
use Database\Seeders\TimonStoreDetailTotalAlbumSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([TimonStoreCategorySeeder::class]);
        $this->call([TimonStoreCategoryStyleSeeder::class]);
        $this->call([TimonStoreSupplierSeeder::class]);
        $this->call([TimonStoreProductSeeder::class]);
        $this->call([TimonStoreSetProductSeeder::class]);
        $this->call([TimonStoreDetailSetProductSeeder::class]);
        $this->call([TimonStoreAlbumProductSeeder::class]);
        $this->call([TimonStoreDetailAlbumProductSeeder::class]);
        $this->call([TimonStoreTotalAlbumSeeder::class]);
        $this->call([TimonStoreDetailTotalAlbumSeeder::class]);
    }
}
