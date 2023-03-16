<?php

namespace App\Jobs;

use App\Mail\QueueEmail4;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class QueueJob4 implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $details;

    public function __construct($details)
    {
        $this->details=$details;
    }

    public function handle()
    {
        Mail::to($this->details['email'])->send(new QueueEmail4($this->details['name'],$this->details['address']));
    }
}
