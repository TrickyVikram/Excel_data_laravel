<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excel_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'roll',
        'email',
        'phone',
        'address',
        'updated_at',
        'created_at',
    ];
}
