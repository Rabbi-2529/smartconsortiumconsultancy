<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'user_type', 'course_id', 'membership_id',
        'membership_start_date', 'membership_end_date', 'status', 'address', 'city', 'state',
        'postal_code', 'website', 'phone_number', 'profile_image', 'bio',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'membership_start_date' => 'date',
        'membership_end_date' => 'date',
    ];

    // Define the relationship with Membership if needed
    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    // Automatically update status based on membership dates
    public function updateStatus()
    {
        $today = now();
        if ($this->membership_end_date < $today) {
            $this->status = 0; // Set status to inactive if membership expired
        } else {
            $this->status = 1; // Set status to active if within the membership period
        }
        $this->save();
    }
}
