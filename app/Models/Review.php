<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'designation',
        'review',
        'rating',
        'thumbnail',
        'date',
    ];
    protected $casts = [
        'date' => 'datetime'
    ];
}
