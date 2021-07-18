<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($thisMail)
    {
        $this->mail = $thisMail;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->mail->purpose){

            if($this->mail->file != NULL){
                return $this->from($this->mail->from)
                    ->subject($this->mail->subject)
                    ->attach(asset("rootjesse/".$this->mail->file))
                    ->view('mails.message')
                    ->with('maildata', $this->mail);
            }
            else{
                return $this->from($this->mail->from)
                    ->subject($this->mail->subject)
                    ->view('mails.message')
                    ->with('maildata', $this->mail);
            }
        }
    }
}
