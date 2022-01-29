<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class send extends Mailable
{
    use Queueable, SerializesModels;

    public $d;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($d)
    {
        $this->d=$d;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('test mail form omar')->view('admin.Approved');
    }
}
