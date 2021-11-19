<?php

namespace App\Http\Livewire;

use App\Payment;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\ { Column, DateColumn };

class PaymentsTable extends LivewireDatatable
{
    public $model = Payment::class;

    public function columns()
    {
        return [
            DateColumn::name('created_at')
                ->label('Date de paiment'),
            Column::name('reservation.formation.title')
                ->label('Gîte'),
            DateColumn::name('reservation.start')
                ->label('Début du séjour'),
        ];
    }
}
