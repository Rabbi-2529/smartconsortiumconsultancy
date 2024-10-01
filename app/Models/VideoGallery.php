<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;

    protected $table = 'video_gallery'; // Specify the table name if it's different

    protected $fillable = [
        'video_url',
        'video_thumbnail',
        'caption',
    ];

    // Automatically generate a thumbnail when the video URL is set
    public function setVideoUrlAttribute($value)
    {
        $this->attributes['video_url'] = $value;
        $this->attributes['video_thumbnail'] = $this->generateThumbnail($value);
    }

    // Generate the thumbnail URL based on the video URL
    public function generateThumbnail($videoUrl)
    {
        // For YouTube videos
        if (preg_match('/youtube\.com\/watch\?v=([^&]+)/', $videoUrl, $matches)) {
            return 'https://img.youtube.com/vi/' . $matches[1] . '/0.jpg';
        }

        // For shortened YouTube links (youtu.be)
        if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $videoUrl, $matches)) {
            return 'https://img.youtube.com/vi/' . $matches[1] . '/0.jpg';
        }

        // Return null or a default thumbnail if not a YouTube URL
        return null;
    }
}
