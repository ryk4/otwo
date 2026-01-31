<?php

namespace App\Mail;

use App\Http\Controllers\UserController;
use App\Models\QuizEntry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GeneratedBookMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public ?string $audioBookUrl = null;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public QuizEntry $quizEntry
    ) {
        if ($quizEntry->payment->product->type === \App\Enums\ProductType::audiobook) {
            $this->audioBookUrl = UserController::getAudioBookLink($quizEntry->language);
        }
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('OTWO team'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.generated-book',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath($this->quizEntry->getFirstMediaUrl(QuizEntry::MEDIA_GENERATED_BOOK)),
        ];
    }
}
