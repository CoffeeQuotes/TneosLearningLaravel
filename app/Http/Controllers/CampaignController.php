<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    //
    public function create() {
        return view('campaign');
    }
    public function store(Request $request) {
        $campaign = new Campaign;
        $campaign->student_name = $request->student_name;
        $campaign->grade = $request->grade;
        $campaign->phone = $request->phone;
        $campaign->email = $request->email;
        $campaign->state = $request->state;
        $campaign->save();
        return redirect('https://tneos.in/freelivevideo');
    }
}
