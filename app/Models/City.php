<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
        'short_code',
    ];

    public function country() {
        return $this->belongsTo(Country::class);
    }
}
