<?php

namespace App\Mail;

use App\Introduction;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Introduce extends Mailable
{
    use Queueable, SerializesModels;
    public $introduction;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($introduction)
    {
        $this->introduction = $introduction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.introduce')->with(['introduction'=>$this->introduction]);
    }
}
