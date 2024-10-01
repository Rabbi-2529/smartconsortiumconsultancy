<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTutorial extends Model
{
    use HasFactory;

    // Define the table name if it is not the plural form of the model name
    protected $table = 'course_tutorials';

    // Specify the primary key if it's not the default 'id'
    protected $primaryKey = 'id';

    // Define the fillable attributes
    protected $fillable = [
        'course_id',
        'title',
        'description',
        'icon',
        'video',
    ];

    // Set timestamps to false if your table does not have created_at and updated_at fields
    public $timestamps = true;

    // Define any relationships if needed
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
