<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BARequest extends FormRequest
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
            'full_name' => 'required',
            'instagram' => 'required|unique:brand_ambassadors',
            'email' => 'required|email|unique:brand_ambassadors',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required|integer',
            'postal_code' => 'required|numeric',
            'job' => 'required',
            'question_1' => 'required',
            'question_7' => 'required',
            'question_8' => 'required',
            'question_9' => 'required',
            'question_10' => 'required',
            'question_11' => 'required',
            'question_12' => 'required',
            'question_13' => 'required',
        ];
    }
}
