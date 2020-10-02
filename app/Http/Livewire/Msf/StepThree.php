<?php

namespace App\Http\Livewire\Msf;

use Livewire\Component;

class StepThree extends Component
{
    public $state = [];
    protected $rules = [
        'state.pet_age' => 'required'
    ];
    protected $messages = [
        'state.pet_age.required' => 'Your pet\'s age is required.'
    ];

    public function updatedState(){
        //Merge Overall State
        $this->emit('mergeState', $this->state);
    }

    public function submit() {
        $this->validate();
        $this->emit('store');
    }

    public function render()
    {
        return view('livewire.msf.step-three');
    }
}
