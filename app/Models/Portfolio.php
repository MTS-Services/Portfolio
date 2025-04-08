<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolios';

    protected $fillable = [
        'category_id',
        'image',
        'source_url',
        'live_url',

    ];

    public function category()
    {
        return $this->belongsTo(Portfolio_Category::class);
    }
    
}
