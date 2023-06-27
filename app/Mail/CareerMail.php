<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;
    public $career;

    // public $billdetail;
    // public $billingdetail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($career)
    {
        $this->career = $career;
        // $this->billdetail = $billdetail;

        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $date=Carbon::now();
        return $this->subject('Iroid : New Job application Received at '.$date)->view('CareerMail')->with('career',$this->career);

    }
}
