<?php

namespace App\Mail;

use App\Models\ConsultationRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConsultationRequestSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public ConsultationRequest $requestData;

    public function __construct(ConsultationRequest $requestData)
    {
        $this->requestData = $requestData;
    }

    public function build(): self
    {
        return $this
            ->subject('Нова заявка на консультацію')
            ->view('emails.consultation_request')
            ->with([
                'requestData' => $this->requestData,
            ]);
    }
}

