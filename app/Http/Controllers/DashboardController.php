<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sms_user_contact;
use App\Models\sms_group;

class DashboardController extends Controller
{
    //
    function showData()
    {
        $contact_list =  sms_user_contact::where('created_by', session('user'))->count();
        // get count of countact list
        $group_list =  sms_group::where('created_by', session('user'))->count();
        // 
        return view('dashboard', ['contact_list' => $contact_list, 'group_list' => $group_list]);
    }
}
