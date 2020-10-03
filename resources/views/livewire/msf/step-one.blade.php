<div>
    <form action="#">
        <div class="text-gray-600 font-bold">Step One</div>
        <label for="pet_name" class="my-2 inline-flex">Pet Name</label>
        <input wire:model.defer="state.pet_name" type="text" class="border-2 rounded w-full p-2">

        @error('state.pet_name')
        <div class="text-red-600 italic text-sm mt-2">{{ $message }}</div>
        @enderror
        <div class="mt-6 flex justify-between">
            <div></div>
            <button wire:click.prevent="submit">Next</button>
        </div>
    </form>
</div>
{{--@push('scripts')--}}
{{--    <script>--}}
{{--            console.log("The JS is working");--}}
{{--    </script>--}}
{{--@endpush--}}



