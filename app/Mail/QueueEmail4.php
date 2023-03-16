<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QueueEmail4 extends Mailable
{
    use Queueable, SerializesModels;
    public $name,$address;

    public function __construct($name,$address)
    {
        $this->name=$name;
        $this->address=$address;
    }

    public function build()
    {
        return $this->view('email.queue4')->with([
            'name'=>$this->name,
            'address'=>$this->address
        ]);
    }
}
