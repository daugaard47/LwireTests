<div>
    <div class="max-w-lg mx-auto lg:max-w-none">
        <x-flash.flash-messages/>
        <form wire:submit.prevent="submit" class="grid grid-cols-1 row-gap-6">

            {{--STEP 1--}}
            @if($step == 0)
            <div>
                <label for="pet_name" class="sr-only">Pet Name</label>
                <label for="pet_name" class="block text-sm leading-5 font-medium text-gray-700">Pet Name</label>
                <div class="relative rounded-md shadow-sm">
                    <input id="pet_name" wire:model.lazy="pet_name"
                           class="mt-1 form-input block w-full py-2 px-4 placeholder-gray-500 transition ease-in-out duration-150">
                </div>
                @error('pet_name')
                <p class="text-sm text-red-700 mt-1">{{ $message }}</p>
                @enderror
            </div>
            @endif
            {{--/STEP 1/--}}

            {{--STEP 2--}}
            @if($step == 1)
            <div>
                <fieldset class="sm:col-span-2">

                    <legend class="block text-sm leading-5 font-medium text-gray-700">
                        Pet Type:
                    </legend>
                    <div class="mt-4 grid grid-cols-1 row-gap-4">
                        <div class="flex items-center">
                            <input wire:model.lazy="pet_type" value="dog" type="radio"
                                   class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                            <label for="dog" class="ml-3">
                                <span class="block text-sm leading-5 text-gray-700">Dog</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input wire:model.lazy="pet_type" value="cat" type="radio"
                                   class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                            <label for="cat" class="ml-3">
                                <span class="block text-sm leading-5 text-gray-700">Cat</span>
                            </label>
                        </div>

                    </div>
                    @error('pet_type')
                    <p class="text-sm text-red-700 mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>
            </div>
            @endif
            {{--/STEP 2/--}}

            {{--STEP 3--}}
            @if($step == 2)
            <div>
                <label for="pet_gender" class="sr-only">Gender</label>
                <label for="pet_gender" class="block text-sm leading-5 font-medium text-gray-700">Gender</label>
                <select id="pet_gender" wire:model="pet_gender"
                        class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                    <option selected disabled>Pick one</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                @error('pet_gender')
                <p class="text-sm text-red-700 mt-1">{{ $message }}</p>
                @enderror
            </div>
            @endif
            {{--/STEP 3/--}}

            {{--/STEP 4/--}}
            @if($step == 3)
                <div>
                    <label for="pet_size" class="sr-only">Pet Size</label>
                    <label for="pet_size" class="block text-sm leading-5 font-medium text-gray-700">Pet Size</label>
                    <select id="pet_size" wire:model.lazy="pet_size"
                            class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                        <option selected disabled>Pick one</option>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                        <option>Xtra Large</option>
                    </select>
                    @error('pet_size')
                    <p class="text-sm text-red-700 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            @endif
            {{--/STEP 4/--}}

            {{--STEP 5 Review--}}
            @if($step == 4)
                <div>
                    <div class="block text-sm leading-5 font-medium text-gray-700">Review</div>
                    <p class="text-base">
                        Does this look correct? If so, please Submit.
                    </p>
                    <ul class="capitalize">
                        <li>
                            Pet Name: {{ $pet_name }}
                        </li>
                        <li>
                            Pet Type: {{ $pet_type }}
                        </li>
                        <li>
                            Pet Gender: {{ $pet_gender }}
                        </li>
                        <li>
                            Pet Size: {{ $pet_size }}
                        </li>
                    </ul>
                </div>
            @endif
            {{--/STEP 5/--}}

            {{--Buttons--}}
            <x-multi-step-buttons :step="$step"/>
            {{--/Buttons/--}}
        </form>
    </div>
</div>
