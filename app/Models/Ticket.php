<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'flight_id',
        'class_id',
        'user_id',
        'baggage'
    ];

    public function flight() {
        return $this->belongsTo(Flight::class);
    }

    public function class() {
        return $this->belongsTo(ClassSeat::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
