<div>
    <div class="flex justify-between">
        <span class="inline-flex rounded-md shadow-sm">
            @if($step > 0  && $step <= 3)
                <button type="button" wire:click="decreaseStep"
                        class="inline-flex justify-center py-3 px-6 border border-gray-400 text-base leading-6 font-medium rounded-md text-gray-400 hover:text-white hover:bg-gray-500 focus:outline-none focus:border-gray-600 focus:shadow-outline-gray active:bg-gray-600 transition duration-150 ease-in-out">
                Previous
            </button>
            @endif
        </span>


        <span class="inline-flex rounded-md shadow-sm">
                    @if($step <= 3)
                <button type="submit"
                        class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition duration-150 ease-in-out">
                Next
              </button>
            @endif
            @if($step == 4)
                <button type="submit"
                        class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
                Submit
              </button>
            @endif

            @if($step == 5)
                <a href="/">
                            <button type="button"
                                    class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition duration-150 ease-in-out">
                Go Home
              </button>
                            </a>
                <button type="submit"
                        class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
                Add a new pet
              </button>
            @endif
        </span>

    </div>
</div>
