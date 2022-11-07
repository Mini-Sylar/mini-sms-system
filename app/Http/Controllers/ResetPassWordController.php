<?php

namespace App\Http\Controllers;

use App\Mail\resetMail;
use Illuminate\Http\Request;
use App\Models\SMS_User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ResetPassWordController extends Controller
{
    //
    function sendResetEmail(Request $req)
    {
        // Link
        $checkEmail  = SMS_User::where('email', '=', $req->input('email'))->exists();
        if ($checkEmail) {
            $email = $req->input("email");
            $user_name = DB::table('sms_users')->where('email', $email)->value('first_name');
            $token = SMS_User::where('email', $email)->first()->phone_number;
            $link = "localhost:8000/" . 'password/reset/' . $token . '?email=' . urlencode($email);
            $mailData = [
                'title' => 'Mail from ItSolutionStuff.com',
                'url' => $link,
                'user_name' => $user_name,
            ];
            Mail::to($email)->send(new resetMail($mailData));
            return back()->with('success', 'Password reset link has been sent to your email');
        } else {
            return redirect('login')->with('error', 'Account does not exist');
        }
    }

    function resetPassword($phone_number)
    {
        return view('change-password', ['phone_number' => $phone_number]);
    }

    function updatePassword(Request $req)
    {
        if ($req->new_password == $req->confirm_password) {      // meaning passwords are the same 
            $phone_number = $req->user_number; //Assume some phone number exists
            $user = SMS_User::where('phone_number', $phone_number)->first();
            $user->password = $req->new_password;
            $user->save();
            return redirect('login')->with('success', 'Password reset successfully!');
        } else {
            return back()->with('error', 'Passwords do not match');
        }
    }
}
