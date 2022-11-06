<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sms_group;
use App\Models\sms_user_contact;

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
        $data =  sms_group::where('created_by', session('user'))->get();
        return view('groups', ['groups' => $data]);
    }
    function delete($id)
    {
        $data = sms_group::find($id);
        $data->delete();
        return back()->with('success', 'Group deleted successfully!');
    }
}
