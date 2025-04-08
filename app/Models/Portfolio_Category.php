<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio_Category extends Model
{
    use HasFactory;
    protected $table = 'portfolio_categories';

    protected $fillable = [
        'name',
    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
