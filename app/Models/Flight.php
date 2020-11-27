<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'city_from_id',
        'city_to_id',
        'airline_id',
        'flight_date',
        'flight_time',
        'departure_hour'
    ];

    public function city_from() {
        return $this->belongsTo(City::class, 'city_from_id');
    }

    public function city_to() {
        return $this->belongsTo(City::class, 'city_to_id');
    }

    public function airline() {
        return $this->belongsTo(Airline::class);
    }
    use HasFactory;
}
