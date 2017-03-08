<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Requests\ContactForm;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(ContactForm $request)
    {
        $name = $request->input('name');
        $number = $request->input('number');
        $website = $request->input('website');
        $email = $request->input('email');
        $letter = $request->input('letter');

        return $this->view('emails.contact')
            ->with([
                'name' => $name,
                'number' => $number,
                'website' => $website,
                'email' => $email,
                'letter' => $letter
            ]);;
    }
}
