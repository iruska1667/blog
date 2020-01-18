<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cost' => ['required', 'regex:/^([0-9]+\.?[0-9]{1,2})$/']
        ];
    }
}
