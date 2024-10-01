<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $experience;
    public $expected_salary;
    public $resumePath;
    public $jobTitle; // New property for job title

    public function __construct($name, $email, $phone, $experience, $expected_salary, $resumePath, $jobTitle)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->experience = $experience;
        $this->expected_salary = $expected_salary;
        $this->resumePath = $resumePath;
        $this->jobTitle = $jobTitle; // Assign the job title
    }

    public function build()
    {
        return $this->subject('New Job Application Received')
                    ->view('emails.job_application')
                    ->attach($this->resumePath, [
                        'as' => 'resume.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
