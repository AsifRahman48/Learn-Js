<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QueueEmail5 extends Mailable
{
    use Queueable, SerializesModels;
    private $name,$address,$food;

    public function __construct($name,$address,$food)
    {
        $this->name=$name;
        $this->address=$address;
        $this->food=$food;
    }

    public function build()
    {
        return $this->view('email.queue5')->with([
            'name'=>$this->name,
            'address'=>$this->address,
            'food'=>$this->food
        ]);
    }
}
