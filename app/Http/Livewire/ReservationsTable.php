<?php

namespace App\Http\Livewire;

use App\Reservation;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\ {
    Column,
    DateColumn,
    BooleanColumn
};

class ReservationsTable extends LivewireDatatable
{
    protected $listeners = ['reservationRented' => 'rented'];
    public $model = Reservation::class;

    public function builder()
    {
        return Reservation::where('user_id', auth()->id())->join('formations', 'reservations.formation_id', '=', 'formations.id');
    }

    public function columns()
    {
        return [
            Column::name('formations.title')
                ->label('Gîte'),
            DateColumn::name('start')
                ->label('Début'),
            DateColumn::name('end')
                ->label('Fin'),
            BooleanColumn::name('rented')
                ->label('Réservation'),
            Column::callback(['rented', 'limit'], function ($rented, $limit) {
                if($rented) {
                    return;
                }
                $formated = date_format(date_create($limit),"d/m/Y");
                return date('Y-m-d') > $limit
                    ? '<span class="text-red-500 font-bold">' . $formated . '</span>'
                    : '<span class="text-green-500">' . $formated . '</span>';
            })->label('Limite de paiement'),
            Column::callback(['limit', 'rented', 'id'], function ($limit, $rented, $id) {
                return view('back.actions', [
                    'limit' => date('Y-m-d') > $limit,
                    'rented' => $rented,
                    'id' => $id,
                ]);
            }),
        ];
    }

    public function rented($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->rented = true;
        $reservation->save();
        $reservation->payment()->create();
    }

    public function destroy(Reservation $reservation)
{
    $reservation->delete();
}
}
