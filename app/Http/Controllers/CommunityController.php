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

    public function save(CommRequest $request)
    {
        $validated = $request->validated();

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
