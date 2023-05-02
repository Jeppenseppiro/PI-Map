<?php

namespace App\Models;

use App\Events\SendPiData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PiData extends Model
{
    use HasFactory;

    protected $dispatchesEvents = [
        'saved' => SendPiData::class,
    ];
}
