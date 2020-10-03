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

    public $gender;

    private $stepActions =[
        'submit1',
        'submit2',
        'submit3',
        'submit4',
        'submit5',
        'submit6'
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
        session()->flash('info', 'Crazy!'.' '.$this->pet_name.' '.'was my nickname in college.');
    }

    public function submit2(){
        $this->validate([
            'pet_type' => 'required',
        ]);

        if($this->pet_type =='dog') {
            session()->flash('info', 'Nice! We are pretty into dogs around here.');
        }elseif($this->pet_type == 'cat'){
            session()->flash('info', 'Purrfect! We love those little fuzzballs.');
        }
        $this->step++;
    }

    public function submit3(){
        $this->validate([
            'pet_gender' => 'required',
        ]);

        if($this->pet_gender == 'male') {
            session()->flash('info', $this->pet_name.' must be a good boy to be getting this!');
        }elseif($this->pet_gender == 'female'){
            session()->flash('info', $this->pet_name.' must be a good girl to be getting this!');
        }
        $this->step++;
    }

    public function submit4(){
        $this->validate([
            'pet_size' => 'required',
        ]);
        if($this->pet_gender == 'male'){
            $gender = 'He\'s';
        }elseif($this->pet_gender == 'female'){
            $gender = 'She\'s';
        }

        if($this->pet_size == 'xs') {
            session()->flash('info', 'I bet'.' '.$this->pet_name.'is so cute. Tiny '.$this->pet_type.' are great snugglers.');
        }elseif($this->pet_size == 'sm'){
            session()->flash('info', 'I bet'.' '.$this->pet_name.'is so cute. Small '.$this->pet_type.' are great snugglers.');
        }elseif($this->pet_size == 'med'){
            session()->flash('info', 'I bet'.' '.$this->pet_name.'is so cute. Medium '.$this->pet_type.' are the perfect size.');
        }elseif($this->pet_size == 'lg'){
            session()->flash('info', 'I bet'.' '.$this->pet_name.'has a great apatite. '.$gender.' going to love out treats.');
        }elseif($this->pet_size == 'xl'){
            session()->flash('info', 'I bet'.' '.$this->pet_name.'has a great apatite. '.$gender.' going to love out treats.');
        }elseif($this->pet_size == '2xl'){
            session()->flash('info', 'WOAH'.' '.$this->pet_name.' Sounds like a horse! '.$gender.' going to love out treats..');
        }
        $this->dispatchBrowserEvent('show-card');
        $this->step++;
    }


    public function submit5(){
        //COLLECT DATA AND STORE IN DB.
        //dd($this->pet_name,$this->pet_type,$this->pet_gender,$this->pet_size);
       // session()->flash('success', 'Let\'s add another pet');
        // $this->reset();
        $this->step++;
    }

    public function submit6(){
        session()->flash('success', 'Let\'s add another pet');
        return redirect()->to('/multi-step');
    }

    public function render()
    {
        return view('livewire.multi-step.multi-step');
    }
}
