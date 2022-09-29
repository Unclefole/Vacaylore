<?php

namespace App\Http\Controllers;

use App\Mail\DeleteAccountMail;
use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use App\Mail\ForgotPassword;
use App\Mail\OrderCompletedMail;
use App\Models\User;

class EmailController extends Controller
{
    public $adminmail = 'admin@mail.com';

    public function verifyEmail($user_id)
    {
        $user = User::find($user_id);

        if ($user) {
            \Mail::to($user->email)->send(new MyTestMail($user));
            // \Mail::to('devpetyr911@gmail.com')->send(new MyTestMail($user));
        } else {
            return back()->with('User Not Found');
        }
    }

    public function orderCompletedEmail($details)
    {
        if ($details) {
            \Mail::to($details['user_email'])->send(new OrderCompletedMail($details));
            return true;
        }
    }

    public function contactUs($subject, $name, $email, $comment)
    {
        $object['subject'] = $subject;
        $object['name'] = $name;
        $object['email'] = $email;
        $object['comment'] = $comment;


        \Mail::to($email)->send(new ContactMail($object));
    }

    public function forgotpassword($details)
    {
        if ($details) {
            \Mail::to($details->email)->send(new ForgotPassword($details));
            return true;
        }
    }

    public function deleteAccountEmail($details)
    {
        if ($details) {
            $mail  = \Mail::to($details->email)->send(new DeleteAccountMail($details));
            return true;
        }
    }


}
