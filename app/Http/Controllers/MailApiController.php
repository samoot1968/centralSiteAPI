<?php

namespace App\Http\Controllers;
use App\Http\Mail\ContactMe;
use Illuminate\Http\Request;

class MailApiController extends Controller
{
    public function contactMail() {
    	$myMail = 'toomas.unt1968@gmail.com';
    	Mail::to($myMail)->send(new ContactMe);
    }
}
