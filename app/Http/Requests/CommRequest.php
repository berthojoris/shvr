<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommRequest extends FormRequest
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
            'community_name' => 'required|unique:communities',
            'instagram' => 'required|unique:brand_ambassadors',
            'email' => 'required|email|unique:brand_ambassadors',
            'phone' => 'required|numeric',
            'youtube' => 'nullable',
            'soundcloud_mixcloud' => 'nullable',
            'community_city' => 'required',
            'community_created' => 'required|date_format:Y-m-d',
            'member_1' => 'required',
            'question_1' => 'required',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
            'question_6' => 'required',
            'question_7' => 'required',
            'question_8' => 'required',
            'question_9' => 'required',
            'member_1_instagram' => 'required',
            'member_1_role' => 'required',
            'member_2_instagram' => 'nullable',
            'member_2_role' => 'nullable',
            'member_3_instagram' => 'nullable',
            'member_3_role' => 'nullable',
            'member_4_instagram' => 'nullable',
            'member_4_role' => 'nullable',
            'member_5_instagram' => 'nullable',
            'member_5_role' => 'nullable',
            'member_6_instagram' => 'nullable',
            'member_6_role' => 'nullable',
            'member_7_instagram' => 'nullable',
            'member_7_role' => 'nullable',
            'member_8_instagram' => 'nullable',
            'member_8_role' => 'nullable',
            'member_9_instagram' => 'nullable',
            'member_9_role' => 'nullable',
        ];
    }
}
