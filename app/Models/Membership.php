<?php

// app/Models/Membership.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'membership_type', 'status', 'price'
    ];

    /**
     * Get the available membership types.
     *
     * @return array
     */
    public static function membershipTypes()
    {
        return [
            1 => 'Platinum',
            2 => 'Gold',
            3 => 'Silver',
        ];
    }

    /**
     * Get the available membership statuses.
     *
     * @return array
     */
    public static function statuses()
    {
        return [
            0 => 'Inactive',
            1 => 'Active',
            2 => 'Suspended'
        ];
    }
}
