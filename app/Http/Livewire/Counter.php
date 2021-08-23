<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Counter extends Component
{
    public $counter;
    public $step;
    public $hydrate = 1;

    public function increment()
    {
        $this->counter += $this->step;
    }

    public function decrement()
    {
        $this->counter -= $this->step;
    }

//    public function hydrate()
//    {
//        $this->hydrate++;
//    }

    public function updatingStep()
    {
        $this->hydrate++;
    }

    public function updatedStep()
    {
        $this->hydrate++;
    }

    public function mount(Request $request, $step = 1)
    {
        $this->counter = 0;
        $this->step = $step;
        return view('livewire.counter');
    }
}
