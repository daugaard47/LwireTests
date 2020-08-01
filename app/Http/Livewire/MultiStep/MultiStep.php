<?php

namespace App\Http\Livewire\MultiStep;

use Livewire\Component;

class MultiStep extends Component
{
    public $pet_name;
    public $pet_type;
    public $pet_gender;
    public $pet_size;

    public $step;


    private $stepActions =[
        'submit1',
        'submit2',
        'submit3',
        'submit4'
    ];

    public function mount(){
        $this->step = 0;
    }

//    public function increaseStep(){
//        $this->step++;
//    }

    public function decreaseStep(){
        $this->step--;
    }

    public function submit(){
        $action = $this->stepActions[$this->step];
        $this->$action();
    }

    public function submit1(){
        $this->validate([
            'pet_name' => 'required|min:1',
        ]);
        $this->step++;
        session()->flash('info', 'Crazy'.' '.$this->pet_name.' '.'was my nickname in college.');
    }

    public function submit2(){
        $this->validate([
            'pet_type' => 'required',
        ]);

        if($this->pet_type = 'dog') {
            session()->flash('info', 'Nice! We are pretty into dogs around here.');
        }elseif($this->pet_type = 'cat'){
            session()->flash('info', 'Purrfect! We love those little fuzzballs.');
        }
        $this->step++;
    }

    public function render()
    {
        return view('livewire.multi-step.multi-step');
    }
}
