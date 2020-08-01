<div>
    <div class="max-w-lg mx-auto lg:max-w-none">
        <form action="#" method="POST" class="grid grid-cols-1 row-gap-6">
            <div>
                <label for="pet_name" class="sr-only">Pet name</label>
                <label for="pet_name" class="block text-sm leading-5 font-medium text-gray-700">Pet name</label>
                <div class="relative rounded-md shadow-sm">
                    <input id="full_name"
                           class="mt-1 form-input block w-full py-2 px-4 placeholder-gray-500 transition ease-in-out duration-150"
                           placeholder="Full name">
                </div>
            </div>
            <div>
                <fieldset class="sm:col-span-2">
                    <legend class="block text-sm leading-5 font-medium text-gray-700">
                        Pick one:
                    </legend>
                    <div class="mt-4 grid grid-cols-1 row-gap-4">
                        <div class="flex items-center">
                            <input id="dog" name="pet_type" value="dog" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                            <label for="dog" class="ml-3">
                                <span class="block text-sm leading-5 text-gray-700">Dog</span>
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="cat" name="pet_type" value="cat" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                            <label for="cat" class="ml-3">
                                <span class="block text-sm leading-5 text-gray-700">Cat</span>
                            </label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div>
                <label for="gender" class="sr-only">Gender</label>
                <label for="gender" class="block text-sm leading-5 font-medium text-gray-700">Gender</label>
                <select id="gender" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                    <option selected disabled>Pick one</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div>
                <label for="size" class="sr-only">Size</label>
                <label for="size" class="block text-sm leading-5 font-medium text-gray-700">Size</label>
                <select id="size" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                    <option selected disabled>Pick one</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>Xtra Large</option>
                </select>
            </div>

{{--Buttons--}}
            <div class="flex justify-between">
                <span class="inline-flex rounded-md shadow-sm">
              <button type="button"
                      class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Previous
              </button>
            </span>
                <span class="inline-flex rounded-md shadow-sm">
              <button type="button"
                      class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Next
              </button>
            </span>
                <span class="inline-flex rounded-md shadow-sm">
              <button type="submit"
                      class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Submit
              </button>
            </span>
            </div>
        </form>
    </div>
</div>
