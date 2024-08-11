<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'user_id',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'status'
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'portfolio_categories');
    }

}
