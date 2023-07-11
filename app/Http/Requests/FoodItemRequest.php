<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodItemRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'user_id' => 'nullable|exists:users,id',
            'description' => 'required|string',
            'address' => 'required|string',
            'availabilities' => 'required|boolean',
            'booked' => 'required|boolean',
            'score_cost' => 'required|integer',
            'images' => 'required|array',
            'images.*' => 'image',
            'expiration_date' => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'A name is required',
            'description.required' => 'A description is required',
            'address.required' => 'An address is required',
            'availabilities.required' => 'An availabilities is required',
            'booked.required' => 'A booked is required',
            'score_cost.required' => 'A score_cost is required',
            'images.required' => 'An images is required',
            'expiration_date.required' => 'An expiration_date is required',
        ];
    }
}
