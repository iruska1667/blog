<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class CalcService
{
    public function totalCost(collection $costPer) : int
    {
        $cost = $costPer->sum('cost');
         return $cost;
    }
}