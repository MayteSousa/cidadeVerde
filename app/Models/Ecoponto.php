<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecoponto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'responsible',
        'latitude',
        'longitude'
    ];
}
