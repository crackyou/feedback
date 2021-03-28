<?php

namespace App\Listeners;

use App\Events\SendFeedback;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendFeedbackNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param SendFeedback $event
     * @return void
     */
    public function handle(SendFeedback $event)
    {
        $feedback = $event->feedback;

        Log::info($feedback);

        $this->sendFeedback($feedback);
    }

    public function sendFeedback($feedback)
    {
        $msg = "Feedback name: " . $feedback->name . "\n" .
            "Feedback email: " . $feedback->email . "\n" .
            "Feedback text: " . $feedback->feedback;
        Mail::send([], [], function ($message) use ($msg){
            $message->to('to@site.com')->subject('New Feedback')
                ->from('from@site.com')
                ->setBody($msg);
        });
    }
}
