<?php

namespace App\Http\Requests\Product;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'requires|string',
            'description' => 'requires',
            'content' => 'requires',
            'preview_image' => 'requires',
            'price' => 'requires',
            'count' => 'requires',
            'is_published' => 'nullable',
            'category_id' => 'nullable',
            'tegs' => 'nullable|array',
            'colors' => 'nullable|array',
        ];
    }
}
