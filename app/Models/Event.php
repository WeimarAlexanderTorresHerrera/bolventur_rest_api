<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'photo',
        'title',
        'date',
        'location',
        'host',
        'description',
        'ticket',
    ];
}
