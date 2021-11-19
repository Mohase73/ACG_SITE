<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Payment;
Use App\Models\Formation;

class Reservation extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $fillable = ['user_id', 'home_id', 'start', 'rented', 'end', 'limit'];

    protected $appends = ['display'];

    public function getDisplayAttribute()
    {
        return 'background';
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

}
