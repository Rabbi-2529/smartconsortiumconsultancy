<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_url',
        'caption',
    ];

    // Accessor for the photo_url attribute
    // public function getPhotoUrlAttribute($value)
    // {
    //     return asset('storage/' . $value);
    // }
}
