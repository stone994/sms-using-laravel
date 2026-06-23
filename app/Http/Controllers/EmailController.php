<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $user = User::first();

        if (!$user) {
            return "No user found in database.";
        }

        Mail::to($user->email)->queue(new WelcomeEmail($user));

        return "Email sent successfully";
    }
}