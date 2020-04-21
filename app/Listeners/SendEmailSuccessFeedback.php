<?php

namespace App\Listeners;

use App\Events\CreateFeedback;
use App\Mail\FeedbackMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailSuccessFeedback
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
     * @param  CreateFeedback  $event
     * @return void
     */
    public function handle(CreateFeedback $event)
    {
        Mail::to($event->feedback->email)->send(new FeedbackMail($event->feedback));
    }
}
