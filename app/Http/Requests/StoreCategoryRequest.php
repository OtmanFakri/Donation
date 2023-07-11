<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

                    'name' => 'required|unique:category|max:255',
                    'parent_id' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'name.unique' => 'A name must be unique',
            'parent_id.required' => 'A parent_id is required',
            'parent_id.integer' => 'A parent_id must be an integer',
        ];
    }
}
