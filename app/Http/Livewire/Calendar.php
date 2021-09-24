<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use App\Models\Formation;
Use App\Models\Reservation;
Use Carbon\Carbon;

class Calendar extends Component
{

    public $reservations = [];
    public $idCalendar;

    public function addEvent($reservation)
    {
        // Détermination date limite de paiement
        $start = Carbon::createFromFormat('Y-m-d', $reservation['start']);
        $diff = Carbon::now()->diffInDays($start);
        $reservation['limit'] = $start->subDays($diff < 8 ? 1 : 7)->toDateString();
        $reservation['user_id'] = auth()->id();
        $reservation['formation_id'] = $this->idCalendar;
        Reservation::create($reservation);
    }
    
    public function render()
    {
        $this->reservations = json_encode(Formation::find($this->idCalendar)->reservations()->get());
        return view('livewire.calendar');
    }

}
