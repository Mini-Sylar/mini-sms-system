<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sms_user_contact;
use App\Models\SMS_user;


class AddContact extends Controller
{
    //
    function addData(Request $req)
    {
        $contact = new sms_user_contact;
        $contact->full_name = $req->input('name');
        $contact->contact_number = $req->input('phone');
        $contact->created_by = session('user');
        $contact->save();
        return back()->with('success', 'Contact created successfully!');
    }

    function showData()
    {
        // Show all where created by is user id
        $data =  sms_user_contact::where('created_by', session('user'))->get();
        return view('add-contacts', ['members' => $data]);
    }

    function delete($id)
    {
        $data = sms_user_contact::find($id);
        $data->delete();
        return back()->with('success', 'Contact deleted successfully!');
    }

    function edit($id)
    {
        $data = sms_user_contact::find($id);
        return view('update-contact', ['member' => $data]);
        // return view('update{id}', ['specific_member' => $data]);
    }

    function update($id, Request $req)
    {
        $data =  sms_user_contact::where('created_by', session('user'))->get();
        $contact = sms_user_contact::find($id);
        $contact->full_name = $req->input('name');
        $contact->contact_number = $req->input('phone');
        $contact->save();
        return redirect('contacts')->with('success', 'Contact updated successfully!');
    }
}
