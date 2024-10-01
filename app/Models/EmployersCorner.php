<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployersCorner extends Model
{
    use HasFactory;

    protected $fillable = [
        'cv',
        'short_video_resume',
        'detailed_video_resume',
    ];
}
