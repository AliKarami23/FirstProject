<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddOopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id'=>'required' ,
            'Category'=>'required' ,
            'product_id'=>'required' ,
            'Number'=>'required' ,
            'Price'=>'required' ,
            'TotalPrice'=>'required' ,
            'Description'=>'required' ,
        ];
    }
}