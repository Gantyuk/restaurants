<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestorant extends FormRequest
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
            'name'=>'required|min:2',
            'category'=>'required',
            'short_description'=>'required|min:50|max:150',
            'description'=>'required|min:150',
            'image'=>'required',
            'menu'=>'required',
            'address'=>'required'
        ];
    }
}
