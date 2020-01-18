<?php

namespace App\Services;

use App\CostCategory;
use App\Http\Requests\CostCategoryRequest;
use Illuminate\Database\Eloquent\Collection;

class CostCategoriesService
{
    private $costCategoryRepository;

    public function __construct(CostCategory $costCategory)
    {
        $this->costCategoryRepository = $costCategory;
    }

    public function getCategories() : Collection
    {
        $categories = $this->costCategoryRepository->getCat();
         return $categories;
    }

    public function storeCategory(CostCategoryRequest $costCategoryRequest) : void
    {
        $this->costCategoryRepository->storeCat($costCategoryRequest);
    }

    public function updateCategory(CostCategory $costCategory) : void
    {
        $this->costCategoryRepository->updateCat($costCategory);
    }
}