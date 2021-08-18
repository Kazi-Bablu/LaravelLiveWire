<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter;
    public $step;

    public function increment()
    {
        $this->counter += $this->step;
    }

    public function decrement()
    {
        $this->counter -= $this->step;
    }

    public function mount()
    {
        $this->counter = 0;
        $this->step = 1;
        return view('livewire.counter');
    }
}
