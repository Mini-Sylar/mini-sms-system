<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sms_user_contact;
use App\Models\sms_group;

class QuickMessageController extends Controller
{
    //
    function showData()
    {
        $contacts =  sms_user_contact::where('created_by', session('user'))->get();
        $groups = sms_group::where('created_by', session('user'))->get();
        return view('quick-message', ['contacts' => $contacts, 'groups' => $groups]);
    }
}
