<?php

namespace App\Http\Controllers;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailApiController extends Controller
{
    /** Send mail vie API to submitter */
    public function contactMail() {
    	$myMail = 'toomas.unt1968@gmail.com';
    	Mail::to($myMail)->send(new ContactMe);
    }
}
