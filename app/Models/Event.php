<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category',
        'photo',
        'title',
        'date',
        'location',
        'host',
        'description',
        'ticket',
    ];

    protected $casts = [
        'ticket' => 'array',
    ];
}
