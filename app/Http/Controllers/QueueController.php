<?php

namespace App\Http\Controllers;

use App\Jobs\BatchingJob;
use App\Jobs\QueueJob2;
use App\Jobs\QueueJob3;
use App\Jobs\QueueJob4;
use App\Jobs\QueueJob5;
use App\Jobs\SendWelcomeEmail;
use Illuminate\Bus\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Throwable;

class QueueController extends Controller
{
    public function batching(){
        $emails =
            [
                'to' => 'user1@example.com',
                'subject' => 'Hello User 1!',
                'body' => 'This is the email body for User 1.'
            ];
         $email2=   [
                'to' => 'user2@example.com',
                'subject' => 'Hello User 2!',
                'body' => 'This is the email body for User 2.'
            ];
           $email3= [
                'to' => 'user3@example.com',
                'subject' => 'Hello User 3!',
                'body' => 'This is the email body for User 3.'
            ];


        Bus::batch([
            new BatchingJob($emails,$email2,$email3),
        ])->onQueue('low')
            ->then(function (Batch $batch) {

        })->catch(function (Batch $batch, Throwable $e) {

        })->finally(function (Batch $batch) {

        })->dispatch();


         Bus::batch([
            new QueueJob2(),
        ])->onQueue('high')
             ->then(function (Batch $batch) {

        })->catch(function (Batch $batch, Throwable $e) {

        })->finally(function (Batch $batch) {

        })->dispatch();

        return response('mail sent');
    }


    public function queue(){

        $emailJob=new SendWelcomeEmail();
        dispatch($emailJob);

        return response('Email sent successfully');
    }

    public function queue2(){
        $email=new QueueJob2();
        $this->dispatch($email);

        return response('Mail Sent for queue 2');
    }

    public function queue3(){

        $details['name'] = 'Md Asif';
        $details['email'] = 'queue3@gmail.com';

        dispatch(new QueueJob3($details));

        return response('Mail Sent for queue 3');
    }

    public function queue4(){
        $details['name']='asif';
        $details['address']='Natore';
        $details['email']='queue4@gmail.com';

        $this->dispatch(new QueueJob4($details));

        return response('Mail sent for queue 4');
    }

    public function queue5(){
        $details['name']='asif';
        $details['address']='Natore';
        $details['email']='queue5@gmail.com';
        $details['food']='Kacha Gulla';

        $this->dispatch(new QueueJob5($details));

        return response('Mail sent for queue 5');
    }

}
