<?php

namespace App\Mail;

use App\Donate;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Donates extends Mailable
{
    use Queueable, SerializesModels;
    public $donate;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Donate $donate)
    {
        $this->donate = $donate;
        $this->campaign = $donate->Campaign()->get();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.donate')->with(['donate'=>$this->donate,'campaign'=>$this->campaign]);
    }
}
