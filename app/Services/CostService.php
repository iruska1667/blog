<?php

namespace App\Services;

use App\Cost;
use App\Http\Requests\CostRequest;
use Illuminate\Database\Eloquent\Collection;

class CostService
{
    private $costRepository;

    public function __construct(Cost $cost)
    {
        $this->costRepository = $cost;
    }

    public function getLastCost() : Cost
    {
        $lastCost = $this->costRepository->getLastCost();
         return $lastCost;
    }

    public function getLastUpdatedCost() : Cost
    {
        $lastUpdatedCost = $this->costRepository->getUpdCost();
         return $lastUpdatedCost;
    }

    public function storeCost(CostRequest $costRequest) : void
    {
        $this->costRepository->storeCost($costRequest);
    }

    public function showCostPerDay() : Collection
    {
        $costPerDay = $this->costRepository->showCost();
         return $costPerDay;
    }

    public function showCostPerTime() : Collection
    {
        $costPerDay = $this->costRepository->showCostTime();
         return $costPerDay;
    }

    public function updateCost(Cost $cost) : void
    {
        $this->costRepository->updateCost($cost);
    }

    public function deleteCost(Cost $cost) : void
    {
        $this->costRepository->deleteCost($cost);
    }
}