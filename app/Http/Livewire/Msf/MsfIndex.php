<?php

namespace App\Http\Livewire\Msf;

use Livewire\Component;

class MsfIndex extends Component {
    public $state = [];
    public $step = 1;

    protected $listeners = [
        'goToStep',
        'mergeState',
        'store'
    ];

    public function store(){
        dd($this->state);
    }

    public function mergeState($state){
        $this->state = array_merge($this->state, $state);
    }

    public function goToStep($step) {
        $this->step = $step;
    }

    public function render() {
        return view('livewire.msf.msf-index');
    }
}
