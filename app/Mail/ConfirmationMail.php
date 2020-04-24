<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    public $cart;
 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $cart)
    {
        $this->details = $details;
        $this->cart = $cart;
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Order Confirmation')
        ->view('emails.order-confirmation');
    }
}
