<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'courses';

    // The attributes that are mass assignable.
    protected $fillable = [
        'course_name',
        'course_teacher_name',
        'course_teacher_image',
        'course_price',
        'course_description',
        'start_date',
        'deadline_date',
    ];

    // The attributes that should be hidden for arrays.
    protected $hidden = [];
    public function learners()
    {
        return $this->hasMany(User::class, 'course_id'); // Assuming 'course_id' is the foreign key in users table
    }
}
