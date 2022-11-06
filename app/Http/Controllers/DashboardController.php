<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sms_user_contact;
use App\Models\sms_group;
use App\Models\analytic;

class DashboardController extends Controller
{
    //
    function showData()
    {
        // Get Number of messages sent
        $number_messages = analytic::where('user_name', session('user'))->sum('number_of_messages_sent');
        // Get contact list
        $contact_list =  sms_user_contact::where('created_by', session('user'))->count();
        // get count of countact list
        $group_list =  sms_group::where('created_by', session('user'))->count();
        // 
        return view('dashboard', ['contact_list' => $contact_list, 'group_list' => $group_list, 'number_messages' => $number_messages]);
    }
}
