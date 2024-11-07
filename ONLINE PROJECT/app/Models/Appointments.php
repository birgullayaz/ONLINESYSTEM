<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointments extends Model
{
    use Notifiable;

    public $incrementing = false;

    public $timestamps = false;
    protected $table = 'appointments';

    protected $fillable = [
        'id',
        'name',
        'date',
        'time',
        'provider',
        'costumer_email',
        'created_at',

    ];
}
