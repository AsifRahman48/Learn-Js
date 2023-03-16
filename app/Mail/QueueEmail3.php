<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QueueEmail3 extends Mailable
{
    use Queueable, SerializesModels;
    private $name;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function build()
    {
        return $this->subject('Welcome to queue!')->view('email.queue3')->with([
            'name' => $this->name,
            ]);
    }
}
