<?php

namespace App\Http\Livewire\Msf;

use Livewire\Component;

class StepTwo extends Component
{
    public $state = [];
    protected $rules = [
        'state.pet_type' => 'required'
    ];
    protected $messages = [
        'state.pet_type.required' => 'Your pet\'s type is required.'
    ];

//    protected $listeners = [
//        'fire',
//    ];






    public function updatedState(){
        //Merge Overall State
        $this->emit('mergeState', $this->state);
    }

    public function submit() {
        $this->validate();
        $this->emit('goToStep', 3);
    }
    public function render()
    {
        return view('livewire.msf.step-two');
    }
}
