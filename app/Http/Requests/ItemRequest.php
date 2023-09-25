<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return[
            'name'=> 'required|string|max:255',
            'brand_id' => 'required|integer|exists:brands,id',
            'type_id' => 'required|integer|exists:types,id',
            'photos' => 'nullable|array',
            'photos.*' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'features' => 'nullable|string|',
            'price' => 'required|numeric',
            'star' => 'nullable|numeric',
            'review' => 'nullable|'
        ];
    }
}
