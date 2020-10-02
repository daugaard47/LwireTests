<?php

namespace App\Http\Livewire\Msf;

use Livewire\Component;

class StepOne extends Component {
    public $state = [];
    protected $rules = [
        'state.pet_name' => 'required'
    ];
    protected $messages = [
        'state.pet_name.required' => 'Your pet\'s name is required.'
    ];

    public function updatedState(){
        //Merge Overall State
        $this->emit('mergeState', $this->state);
    }

    public function submit() {
        $this->validate();
        $this->emit('goToStep', 2);
        $this->emit('fire');
    }

    public function render() {
        return view('livewire.msf.step-one');
    }
}
