<div>
    <p>{{$counter}}</p>
    <p><input wire:keydown.arrow-up="increment({{$step}}}})" wire:keydown.arrow-down="decrement({{$step}})" type="text"
              wire:model.lazy="step"/>
    </p>
    <button wire:click="increment">+</button>
    |
    <button wire:click="decrement">-</button>
</div>
