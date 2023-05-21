<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class GuiEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('bhsangxd@gmail.com')
                    ->subject('Có một liên hệ mới')
                    ->view('mail.contactmail')
                    ->with('data', $this->data);
    }
}
