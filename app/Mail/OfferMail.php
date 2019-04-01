<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OfferMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * OfferMail constructor.
     * @param $name
     * @param $email
     * @param $phone
     * @param $company
     * @param $gsm
     * @param $city
     * @param $preferences
     * @param $services
     * @param $body
     */
    public function __construct($name, $email, $phone, $company, $gsm, $city, $preferences, $services, $body)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->company = $company;
        $this->gsm = $gsm;
        $this->city = $city;
        $this->preferences = $preferences;
        $this->services = $services;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@zmfrafsistemleri.com')
            ->subject('Teklif Talebi')
            ->markdown('emails.offer')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'company' => $this->company,
                'gsm' => $this->gsm,
                'city' => $this->city,
                'preferences' => $this->preferences,
                'services' => $this->services,
                'body' => $this->body,
            ]);
    }
}
