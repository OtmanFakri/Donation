<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storeobject_itemRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required',
            'description'=>'required',
            'address'=>'required',
            'category_id'=>'required',
            'availabilities'=>'required',
            'booked'=>'required',
            'score_cost'=>'required',
            'image_path' => 'required|array|min:1|max:4',
            'image_path.*' => 'image|mimes:jpeg,png,jpg',
        ];
    }
}
