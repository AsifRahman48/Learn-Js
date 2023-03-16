<?php

namespace App\Jobs;

use App\Mail\BatchingMail;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class BatchingJob implements ShouldQueue
{
    use Batchable ,Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emails;
    protected $email2;
    protected $email3;

    public function __construct($emails, $email2, $email3)
    {
        $this->emails = $emails;
        $this->email2 = $email2;
        $this->email3 = $email3;
    }

    public function handle()
    {
        /*$email = new BatchingMail();
        $email->to($this->to)
            ->subject($this->subject)
            ->html($this->body);*/

        Mail::to($this->emails['to'])->send(new BatchingMail());
    }

}
