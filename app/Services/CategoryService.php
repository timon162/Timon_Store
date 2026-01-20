<?php

namespace App\Services;

use App\Exceptions\NullException;
use App\Repositories\Interfaces\CategoryInterfaceRepository;
use App\Services\Interfaces\CategoryInterfaceService;
use Illuminate\Support\Collection;
use App\Utils\MapperCategoryStyleUtil;
use App\Constants\GenderConstant;

class CategoryService implements CategoryInterfaceService
{
    public function __construct(protected CategoryInterfaceRepository $categoryRepo) {}

    public function getCategoryBuyGender(int $gender): Collection
    {
        $categoty = $this->categoryRepo->getCategoryBuyGender($gender);

        if (!$categoty) {
            throw new NullException();
        }

        return $categoty;
    }


    public function groupCategoryName(): array
    {
        $womenCategory = $this->getCategoryBuyGender(GenderConstant::FEMALE);
        $menCategory = $this->getCategoryBuyGender(GenderConstant::MALE);

        $womeResult = MapperCategoryStyleUtil::groupCategoryStyleByName($womenCategory);
        $menResult = MapperCategoryStyleUtil::groupCategoryStyleByName($menCategory);

        return ['catgory_women' => $womeResult, 'catgory_men' => $menResult];
    }
}
