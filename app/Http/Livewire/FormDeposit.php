<?php

namespace App\Http\Livewire;

use App\Models\Deposit;
use Livewire\Component;

class FormDeposit extends Component
{
    public $rekening;
    public $rekening_asal;
    public $jumlah;
    public $catatan;
    public function render()
    {
        return view('livewire.form-deposit');
    }
    public function save(){
        $this->validate([
            'rekening'=>'required',
            'rekening_asal'=>'required',
            'jumlah'=>'required'
        ]);
        $deposit = new Deposit();
        $deposit->rekening = $this->rekening;
        $deposit->rekening_asal = $this->rekening_asal;
        $deposit->jumlah = $this->jumlah;
        $deposit->catatan = $this->catatan;
        $deposit->status = 0;
        $deposit->save();
        $this->rekening = "";
        $this->rekening_asal = "";
        $this->jumlah = "";
        $this->catatan = "";
        session()->flash('success','Deposit Successfully Created.');
    }
}
