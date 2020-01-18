<?php

namespace App;

use App\Http\Requests\CostRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $fillable = [
        'cost', 'date', 'id_cat'
    ];
    public function getLastCost() : Cost
    {
        $costs = \App\Cost::all();
        $cost = $costs->last();
         return $cost;
    }

    public function getUpdCost() : Cost
    {
        $updCost = \App\Cost::all();
        $sortedUpdCost = $updCost->sortBy('updated_at')->last();
         return $sortedUpdCost;
    }

    public function storeCost(CostRequest $costRequest) : void
    {
        $validCost = $costRequest->validated();
        Cost::create([
            'cost' => $validCost['cost'],
            'date' => request('date'),
            'id_cat'=>request('id_cat')
        ]);
    }

    public function showCost() : Collection
    {
        $costPerDay = \App\Cost::where('date', request('date'))->get();
         return $costPerDay;
    }

    public function showCostTime() : Collection
    {
        $costPerTime = \App\Cost::whereBetween('date', [request('date'), request('date1')])->get();
        $sorted = $costPerTime->sortBy('date');
         return $sorted;
    }

    public function updateCost(Cost $cost) : void
    {
        $cost->update([
            'cost' => request('cost'),
            'date' => request('date')
        ]);
    }

    public function deleteCost(Cost $cost) : void
    {
        $cost->delete();
    }
}
