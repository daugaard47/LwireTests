<div>
<form wire:submit.prevent="addPost">

    <div class="w-full mb-4">
        <label for="title" class="block text-sm font-medium leading-5 text-gray-700">
            Title
        </label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input type="text" id="title" name="title"
                   class="@error('title') border-red-300 text-red-900 focus:border-red-300 focus:shadow-outline-red @enderror
                       form-input block w-full pr-10 placeholder-gray-300 focus:border-gray-300 focus:shadow-outline-gray sm:text-sm sm:leading-5"
                   placeholder="Title" wire:model="title" aria-invalid="true" aria-describedby="title-error"/>
            @error('title')
            <div id="title-error">
                <div class="-mt-5 absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <p class="mt-2 text-sm text-red-600" id="title-error">
                    You need to add a title.
                </p>
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full mb-4">
        <label for="body" class="block text-sm font-medium leading-5 text-gray-700">
            Body
        </label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <textarea id="body" name="body"
                      class="@error('body') border-red-300 text-red-900 focus:border-red-300 focus:shadow-outline-red @enderror
                          form-input block w-full pr-10 placeholder-gray-300 focus:border-gray-300 focus:shadow-outline-gray sm:text-sm sm:leading-5"
                      placeholder="Body" aria-invalid="true" aria-describedby="body-error" wire:model="body"></textarea>
            @error('body')
            <div id="body-error">
                <div class="-mt-5 absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <p class="mt-2 text-sm text-red-600" id="body-error">
                    You need to add some body text.
                </p>
            </div>
            @enderror
        </div>
    </div>
    <div class="flex justify-end mb-4">
        <button type="submit" class="rounded py-3 px-4 bg-green-500 hover:bg-green-400 text-white">
            Submit
        </button>
    </div>
</form>
</div>

{{--border-red-300 text-red-900 focus:border-red-300 focus:shadow-outline-red--}}
