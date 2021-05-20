<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'user_id',
        'contact_person_name',
        'contact_person_number',
        'email',
        'event_date',
        'event_time',
        'event_type',
        'status'
    ];
}
