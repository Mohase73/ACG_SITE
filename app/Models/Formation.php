<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Reservation;

class Formation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'uuid', 'name', 'phone', 'reservation', 'module', 'formation', 'email', 'message'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
