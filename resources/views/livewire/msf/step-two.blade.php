<div>
    <form action="">
        <div class="text-gray-600 font-bold">Step Two</div>
        <label for="pet_type" class="my-2 inline-flex">Pet Type</label>
        <input wire:model.lazy="state.pet_type" type="text" class="border-2 rounded w-full p-2">

        @error('state.pet_type')
        <div class="text-red-600 italic text-sm mt-2">{{ $message }}</div>
        @enderror

        <div class="mt-6 flex justify-between">
            <a href="#" wire:click.prevent="$emit('goToStep', 1)">Previous</a>
            <button wire:click.prevent="submit">Next</button>
        </div>
    </form>
</div>
{{--Want the event to load the JS here on page 2 load (Was tryong to get it to fire on goToStep event, but no luck)--}}
@push('scripts')
    <script>
        window.addEventListener('fire', event => {
        console.log("The JS is working");
        })
    </script>
@endpush
