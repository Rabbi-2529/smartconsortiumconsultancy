<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOpportunity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',           // Added title field
        'published_date', 
        'vacancy', 
        'experience', 
        'job_type', 
        'salary', 
        'deadline', 
        'location', 
        'image', 
        'description'
    ];

    protected $dates = ['published_date', 'deadline'];
}
