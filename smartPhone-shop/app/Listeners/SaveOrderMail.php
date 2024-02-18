<?php

namespace App\Listeners;

use App\Events\OrderMail;
use App\Http\Controllers\email\GmailController;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SaveOrderMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderMail $event): void
    {
        $orderData = $event->data;
        $emailUser = $event->email;
        $sendMail = new GmailController;
        $sendMail->emailOrder($orderData,$emailUser);
    }
}
