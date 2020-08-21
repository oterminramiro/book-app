<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PdfEmail extends Mailable
{
    use Queueable, SerializesModels;

	public $data;

	public function __construct($data)
	{
		$this->data = $data;
	}

	public function build()
	{
		$address = 'ramiro@cubiq.digital';
		$subject = 'This is a demo!';
		$name = 'Jane Doe';

		return $this->view('emails.pdf')
			->from($address, $name)
			->cc($address, $name)
			->bcc($address, $name)
			->replyTo($address, $name)
			->subject($subject)
			->with([ 'test_message' => $this->data['message'] ]);
	}
}
