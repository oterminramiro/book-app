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
		$address = $_ENV['MAIL_FROM_ADDRESS'];
		$name = $_ENV['MAIL_FROM_NAME'];
		$subject = 'Your book';

		return $this->view('emails.pdf')
			->from($address, $name)
			->replyTo($address, $name)
			->subject($subject)
			->with([ 'username' => $this->data['username'], 'subject' => $subject, ]);
	}
}
