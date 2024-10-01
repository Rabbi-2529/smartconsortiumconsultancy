<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpcomingEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'date', 'image', 'location', 'video',
    ];

    protected $casts = [
        'date' => 'date', // Ensure 'date' is cast to Carbon instance
    ];
}