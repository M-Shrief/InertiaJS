<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PoemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'poet' => ['sometimes', 'string'],
            'reviewed' => ['sometimes', 'boolean'],
            'tags' => ['sometimes'],
            'verses' => ['sometimes', 'array']
        ];
    }
}
