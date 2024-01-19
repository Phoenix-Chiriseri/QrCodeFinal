<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PatientInformation extends Mailable
{
    use Queueable, SerializesModels;

    public $patientInfo;

    public function __construct($patientInfo)
    {
        $this->patientInfo = $patientInfo;
    }

    public function build()
    {
        return $this->view('pages.patient-info')
            ->with([
                'patientName' => $this->patientInfo['patient_name'],
                'dateOfBirth' => $this->patientInfo['date_of_birth'],
                'address' => $this->patientInfo['address'],
                'hospitalArea' => $this->patientInfo['hospital_area'],
                'rating' => $this->patientInfo['rating'],
            ])
            ->subject('New Patient Information');
    }
}
