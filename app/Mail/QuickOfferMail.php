<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuickOfferMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * QuickOfferMail constructor.
     * @param $name
     * @param $email
     * @param $phone
     * @param $page
     */
    public function __construct($name, $email, $phone, $page)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->page = $page;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@zmfrafsistemleri.com')
            ->subject('Hızlı Teklif Talebi')
            ->markdown('emails.quick-offer')
            ->with(['name' => $this->name, 'email' => $this->email, 'phone' => $this->phone, 'page' => $this->page]);
    }
}
