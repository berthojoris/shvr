<?php

namespace App\Http\Controllers;

use App\Community;
use Illuminate\Http\Request;
use App\Http\Requests\CommRequest;

class CommunityController extends Controller
{
    public function register()
    {
        return view('reg_comm');
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
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
        ]);

        Community::create([
            'community_name' => $request->community_name,
            'community_city' => $request->community_city,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'soundcloud_mixcloud' => $request->soundcloud_mixcloud,
            'email' => $request->email,
            'phone' => $request->phone,
            'community_created' => $request->community_created,
            'member_1' => $request->member_1." - ".$request->member_1_instagram." - ".$request->member_1_role,
            'member_2' => $request->member_2." - ".$request->member_2_instagram." - ".$request->member_2_role,
            'member_3' => $request->member_3." - ".$request->member_3_instagram." - ".$request->member_3_role,
            'member_4' => $request->member_4." - ".$request->member_4_instagram." - ".$request->member_4_role,
            'member_5' => $request->member_5." - ".$request->member_5_instagram." - ".$request->member_5_role,
            'question_1' => $request->question_1,
            'question_2' => $request->question_2,
            'question_3' => $request->question_3,
            'question_4' => $request->question_4,
            'question_5' => $request->question_5,
            'question_6' => $request->question_6,
            'question_7' => $request->question_7,
            'question_8' => $request->question_8,
            'question_9' => $request->question_9,
        ]);
        flash('Data kamu berhasil dikirim!')->success();
        return redirect()->back();
    }
}
