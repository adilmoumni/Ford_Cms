<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parentoption extends Model
{
    use HasFactory;

    protected $table = 'parentoption';

    protected $fillable = [
        'title',
        'statue',          
    ];

    
}
