<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailFormSubmit extends Mailable
{
    use Queueable, SerializesModels;
    public $formData;
    public $template;
    public $attachment;
    public $subject;
    /**
     * Create a new message instance.
     */
    public function __construct($formData,$attachment = null,$template,$subject = null)
    {
         $this->formData = $formData;
         $this->template = $template;    
         $this->attachment = $attachment;
         $this->subject = $subject;
    }

    public function build()
    {
        $submit = $this->view("mailtemplate." . $this->template)
                      ->with(['formData' => $this->formData])
                      ->subject($this->subject);

        if ($this->attachment) {
            $submit->attach(
                $this->attachment->getRealPath(),
                [
                    'as' => $this->attachment->getClientOriginalName(),
                    'mime' => $this->attachment->getMimeType(),
                ]
            );
        }
        // dd($submit);
        return $submit;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

