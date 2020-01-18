<?php

namespace App\Http\Controllers;

use App\Cost;
use App\Http\Requests\CostRequest;
use App\Services\CalcService;
use App\Services\CostCategoriesService;
use App\Services\CostService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CostController extends Controller
{
    private $costService;

    public function __construct(CostService $costService)
    {
        $this->costService = $costService;
    }

    public function index(CostCategoriesService $costCategoriesService) : View
    {
        $lastCost = $this->costService->getLastCost();
        $lastUpdatedCost = $this->costService->getLastUpdatedCost();
        $categories = $costCategoriesService->getCategories();
         return view('posts.costs.calc', compact('lastCost', 'lastUpdatedCost', 'categories'));
    }

    public function store(CostRequest $costRequest) : RedirectResponse
    {
        $this->costService->storeCost($costRequest);
         return back();
    }

    public function show(CostCategoriesService $costCategoriesService, CalcService $calcService) : View
    {
        $costPerDay = $this->costService->showCostPerDay();
        $categories = $costCategoriesService->getCategories();
        $summPerDay = $calcService->totalCost($costPerDay);
         return view('posts.costs.calcShow', compact('costPerDay', 'categories', 'summPerDay'));
    }

    public function showPerTime(CostCategoriesService $costCategoriesService, CalcService $calcService) : View
    {
        $costPerTime = $this->costService->showCostPerTime();
        $categories = $costCategoriesService->getCategories();
        $summPerTime = $calcService->totalCost($costPerTime);
         return view('posts.costs.calcShowTime', compact('costPerTime', 'categories', 'summPerTime'));
    }

    public function edit(Cost $cost) : View
    {
        return view('posts.costs.costEdit', compact('cost'));
    }

    public function update(Cost $cost) : RedirectResponse
    {
        $this->costService->updateCost($cost);
         return redirect()->route('cost.index');
    }

    public function destroy(Cost $cost) : RedirectResponse
    {
        $this->costService->deleteCost($cost);
         return redirect()->route('cost.index');
    }
}
