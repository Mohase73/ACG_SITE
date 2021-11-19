<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransformationDigital extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid', 'name', 'phone', 'service', 'email', 'message'
    ];
}
