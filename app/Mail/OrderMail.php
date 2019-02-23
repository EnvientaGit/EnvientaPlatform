<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $productName, $productUrl)
    {
        $this->user = $user;
        $this->productName = $productName;
        $this->productUrl = $productUrl;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.order')
        ->from($this->user->email, $this->user->realname)
        ->subject('Order: ' . $this->productName)
        ->with([
           'user' => $this->user,
           'productName' => $this->productName,
           'productUrl' => $this->productUrl
        ]);
    }
}
