<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SiteSetting extends Model
{
    use HasFactory;
    protected $table = 'site_settings';
    protected  $fillable = [
        'site_logo',
        'favicon',
        'banner',
        'copyright_text',
    ];
}
