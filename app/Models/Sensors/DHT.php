<?php

namespace App\Models\Sensors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DHT extends Model
{
    use HasFactory;

    protected $table = 'dht_s';
    protected $fillable = [
        'humidity',
        'temperature',
        'heat_index'
    ];
}
