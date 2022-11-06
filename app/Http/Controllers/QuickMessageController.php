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

    function sendMessage(Request $req)
    {
        // create array from comma seperated values
        $contacts = rtrim($req->contacts, ',');
        $contacts = explode(',', $contacts);
        $message  = $req->message;
        // remove last value in contacts array
        $url = env('MNOTIFY_QUICK_SMS') . '?key=' . env('MNOTIFY_API_KEY');
        $data = [
            'recipient' => $contacts,
            'sender' => env('MNOTIFY_SENDER_ID'),
            'message' => $message,
            'is_schedule' => 'false',
            'schedule_date' => ''
        ];
        // Send Message Here
        $ch = curl_init();
        $headers = array();
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $result = curl_exec($ch);
        $result = json_decode($result, TRUE);
        curl_close($ch);
        return back()->with('success', 'Message sent successfully');
    }
}
