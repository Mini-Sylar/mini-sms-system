<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sms_group;
use App\Models\sms_user;

class GroupsController extends Controller
{
    //
    //
    function addGroup(Request $req)
    {
        $contact = new sms_group;
        $contact->group_name = $req->input('name');
        $contact->contact_number = $req->input('phone');
        $contact->created_by = session('user');
        $contact->save();
        return back()->with('success', 'Group created successfully!');
    }

    function showData()
    {
        $data =  sms_user::where('phone_number', session('user'))->get() ?? [];
        // get contact_number from sms_group table
        $contact =  sms_group::where('created_by', session('user'))->get('contact_number');
        $count = explode(',', $contact[0]->contact_number);
        return view('groups', ['groups' => $data, 'wordCount' => $count]);
    }
    function delete($id)
    {
        $data = sms_group::find($id);
        $data->delete();
        return back()->with('success', 'Group deleted successfully!');
    }
}
