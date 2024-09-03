<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'category_id' => ['required','integer'],
                'brand_id' => ['required','integer'],
                'name' => ['required','string'],
                'slug' => ['required','string'],
                'small_description' => ['required','string'],
                'description' => ['required','string'],
                'original_price' => ['required','integer'],
                'selling_price' => ['required','integer'],
                'quantity' => ['required','integer'],
                'trending' => ['nullable'],
                'featured' => ['nullable'],
                'status' => ['nullable'],
                'meta_title' => ['nullable'],
                'meta_keyword' => ['nullable'],
                'meta_description' => ['nullable'],
                
        ];
    }
}
