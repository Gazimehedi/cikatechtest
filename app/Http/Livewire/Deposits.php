<?php

namespace App\Http\Livewire;

use App\Models\Deposit;
use Livewire\Component;

class Deposits extends Component
{
    public function render()
    {
        $deposit_proccess = Deposit::where('status','0')->get();
        $deposit_approved = Deposit::where('status','1')->get();
        return view('livewire.deposit',compact(['deposit_proccess','deposit_approved']));
    }
    public function approved($id){
        $deposit = Deposit::find($id);
        $deposit->status = 1;
        $deposit->save();
        session()->flash('success','Deposit Approved Successfully.');
    }
    public function reload($id){
        $deposit = Deposit::find($id);
        $deposit->status = 0;
        $deposit->save();
        session()->flash('success','Deposit Reload Successfully.');
    }
    public function delete($id){
        $deposit = Deposit::find($id)->delete();
        session()->flash('success','Deposit Deleted Successfully.');
    }
}
