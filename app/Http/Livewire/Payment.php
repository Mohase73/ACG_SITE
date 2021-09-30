<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Payment extends Component
{

    public $reservationId;
    public $name;
    public $number;
    public $year = '2021';
    public $month = '01';
    public $cvc;
    protected function rules()
    {
        return [
            'name' => 'required|string',
            'number' => ['required', new CardNumber],
            'year' => ['required', new CardExpirationYear($this->month)],
            'month' => ['required', new CardExpirationMonth($this->year)],
            'cvc' => ['required', new CardCvc($this->number)]
        ];
    }
    public function mount($reservationId)
    {
        $this->reservationId = $reservationId;
    }


    public function render()
    {
        return view('livewire.payment');
    }


    public function submit()
    {
        $this->validate();
        $this->closeModal();
        $this->emit('reservationRented', $this->reservationId);
    }
}
