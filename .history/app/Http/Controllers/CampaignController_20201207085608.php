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
        $campaign->school_name = $request->schoolname;
        $campaign->state = $request->state;
        $campaign->agree_terms = $request->agree_terms;
        $campaign->type = $request->type;
        $campaign->save();
        switch ($campaign->type) {
            case "default" :
                return redirect('https://tneos.in/freelivevideo');
            break;
            case "Free Ebook Capsule 2020" :
                return redirect('https://tneos.in/thankyoufreeebook');
            break;
            case "Free Trial Classes 2020" :
                return redirect('http://tneos.in/thankyou-free-trial-classes');
            default:
                return redirect('https://tneos.in/register');
        }
    }
}
