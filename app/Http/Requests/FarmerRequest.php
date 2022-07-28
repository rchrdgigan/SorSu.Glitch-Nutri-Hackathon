<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FarmerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'barangay' => 'required',
            'municipality_id' => 'required',
            'product' => 'required',
            'description' => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'date_harvest' => 'required',
        ];
    }
}
