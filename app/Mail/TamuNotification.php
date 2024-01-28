<?php

namespace App\Mail;

use App\Models\Tamu;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TamuNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $tamu;

    /**
     * Create a new message instance.
     *
     * @param Tamu $tamu
     */
    public function __construct(Tamu $tamu)
    {
        $this->tamu = $tamu;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.tamu');
    }
}
