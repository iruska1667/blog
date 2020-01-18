<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentBlogPostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'text' => 'required | min: 5',
        ];;
    }
}
