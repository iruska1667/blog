<?php

namespace App;

use App\Http\Requests\CostCategoryRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CostCategory extends Model
{
    protected $fillable = [
        'cat_type'
    ];

    public function getCat() : Collection
    {
        $cat = \App\CostCategory::all();
         return $cat;
    }

    public function storeCat(CostCategoryRequest $costCategoryRequest)
    {
        $validCategory = $costCategoryRequest->validated();
        CostCategory::create([
            'cat_type' => $validCategory['category']
        ]);
    }

    public function updateCat(CostCategory $costCategory) : void
    {
        $costCategory->update([
            'cat_type' => request('type')
        ]);
    }
}
