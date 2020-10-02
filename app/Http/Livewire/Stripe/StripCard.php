<?php

namespace App\Http\Livewire\Stripe;

use Livewire\Component;

class StripCard extends Component
{
    public $showCreate;
    public function showCreateModal()
    {
        $this->emit('loadCard');

      //  $this->showCreate = true;
    }
    public function render()
    {
        return view('livewire.stripe.strip-card');
    }
}
