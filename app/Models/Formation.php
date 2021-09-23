<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Reservation;

class Formation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'text1', 'text2', 'text3', 'image'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
