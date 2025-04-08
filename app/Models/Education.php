<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    
    protected $table = 'educations';

    protected $fillable = [
        'title',
        'institute_name',
        'institute_address',
        'description',
        'start_date',
        'end_date',
    ];
}
