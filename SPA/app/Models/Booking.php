<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "bookings";
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'service',
        'date',
        'time',
        'user_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
