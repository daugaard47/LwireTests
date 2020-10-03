<div>
    <form action="#">
        <div class="text-gray-600 font-bold">Step Three</div>
        <label for="pet_age" class="my-2 inline-flex">Pet Age</label>
        <input wire:model.lazy="state.pet_age" type="text" class="border-2 rounded w-full p-2">

        @error('state.pet_age')
        <div class="text-red-600 italic text-sm mt-2">{{ $message }}</div>
        @enderror
        <div x-data="{ open: false }" @strip-card.window="open = true">
        <livewire:stripe.stripe-card/>
        </div>
        <div class="mt-6 flex justify-between">
            <a href="#" wire:click.prevent="$emit('goToStep', 2)">Previous</a>
            <button wire:click.prevent="submit">Submit</button>
        </div>
    </form>
</div>


