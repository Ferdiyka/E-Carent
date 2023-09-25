<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'item_id' => 'nullable|integer|exists:items,id',
            'user_id' => 'nullable|integer|exists:users,id',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'address' => 'required|string|',
            'city' => 'required|string|max:255',
            'zip'=> 'required|string|max:255',
            'status' => 'nullable|string|in:pending,confirmed,done',
            'payment_status' => 'nullable|string|in:pending,success,failed,expired',
        ];
    }
}
