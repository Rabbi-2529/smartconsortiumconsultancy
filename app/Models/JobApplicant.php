<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplicant extends Model
{
    use HasFactory;

    protected $table = 'job_applicants'; // Optional: specify the table name if it's different from the default

    // Define fillable properties for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'experience',
        'expected_salary',
        'resume',
        'job_id',  // Assuming job_opportunity is stored as job_id
    ];

    // Relationship with Job model
    public function jobOpportunity()
    {
        return $this->belongsTo(JobOpportunity::class, 'job_opportunity_id');
    }

}
