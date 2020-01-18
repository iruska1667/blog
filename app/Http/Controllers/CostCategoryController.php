<?php

namespace App\Http\Controllers;

use App\CostCategory;
use App\Http\Requests\CostCategoryRequest;
use App\Services\CostCategoriesService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CostCategoryController extends Controller
{
    private $costCategoriesService;
    public function __construct(CostCategoriesService $costCategoriesService)
    {
        $this->costCategoriesService = $costCategoriesService;
    }

    public function index() : View
    {
        $category = $this->costCategoriesService->getCategories();
         return view('posts.categories', compact('category'));
    }

    public function store(CostCategoryRequest $costCategoryRequest) : RedirectResponse
    {
        $this->costCategoriesService->storeCategory($costCategoryRequest);
         return back();
    }

    public function show(CostCategory $costCategory) : View
    {
        return view('posts.categoryShow', compact('costCategory'));
    }

    public function edit(CostCategory $costCategory) : View
    {
        return view('.posts.costCategoryEdit', compact('costCategory'));
    }

    public function update(CostCategory $costCategory) : RedirectResponse
    {
         $this->costCategoriesService->updateCategory($costCategory);
         return redirect()->route('category.index');
    }
}
