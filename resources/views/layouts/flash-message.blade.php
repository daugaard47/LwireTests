@if ($message = Session::get('success'))
    <div class="px-4 alert z99 absolute pin-c lg:w-1/2 w-full ">
        <div class="rounded-md bg-green-100 p-4 shadow-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm leading-5 font-bold text-green-900">
                        Success!
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-green-800">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                    <div class="mt-4">
                        <div class="-mx-2 -my-1.5 flex">
                            <button type="button" data-dismiss="alert" aria-label="Dismiss"
                                    @click.away="isOpen = !isOpen"
                                    class="px-2 py-1.5 rounded text-sm leading-5 font-medium text-green-900 bg-green-200 hover:bg-green-300 focus:outline-none focus:bg-green-200 transition ease-in-out duration-150">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('Thank You!'))
    <div class="px-4 alert z99 absolute pin-c lg:w-1/2 w-full ">
        <div class="rounded-md bg-green-100 p-4 shadow-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm leading-5 font-bold text-green-900">
                        Thank you!
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-green-800">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                    <div class="mt-4">
                        <div class="-mx-2 -my-1.5 flex">
                            <button type="button" data-dismiss="alert" aria-label="Dismiss"
                                    class="px-2 py-1.5 rounded text-sm leading-5 font-medium text-green-900 bg-green-200 hover:bg-green-300 focus:outline-none focus:bg-green-200 transition ease-in-out duration-150">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('deleted'))
    <div class="px-4 alert z99 absolute pin-c lg:w-1/2 w-full ">
        <div class="rounded-md bg-red-100 p-4 shadow-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm leading-5 font-bold text-red-900">
                        Successfully Deleted!
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-red-800">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                    <div class="mt-4">
                        <div class="-mx-2 -my-1.5 flex">
                            <button type="button" data-dismiss="alert" aria-label="Dismiss"
                                    class="px-2 py-1.5 rounded text-sm leading-5 font-medium text-red-900 bg-red-200 hover:bg-red-300 focus:outline-none focus:bg-red-200 transition ease-in-out duration-150">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('updated'))
    <div class="px-4 alert z99 absolute pin-c lg:w-1/2 w-full ">
        <div class="rounded-md bg-blue-100 p-4 shadow-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm leading-5 font-bold text-blue-900">
                        Successfully Updated!
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-blue-800">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                    <div class="mt-4">
                        <div class="-mx-2 -my-1.5 flex">
                            <button type="button" data-dismiss="alert" aria-label="Dismiss"
                                    class="px-2 py-1.5 rounded text-sm leading-5 font-medium text-blue-900 bg-blue-200 hover:bg-blue-300 focus:outline-none focus:bg-blue-200 transition ease-in-out duration-150">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="px-4 alert z99 absolute pin-c lg:w-1/2 w-full ">
        <div class="rounded-md bg-red-100 p-4 shadow-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm leading-5 font-bold text-red-900">
                        Error!
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-red-800">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                    <div class="mt-4">
                        <div class="-mx-2 -my-1.5 flex">
                            <button type="button" data-dismiss="alert" aria-label="Dismiss"
                                    class="px-2 py-1.5 rounded text-sm leading-5 font-medium text-red-900 bg-red-200 hover:bg-red-300 focus:outline-none focus:bg-red-200 transition ease-in-out duration-150">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('stripeerror'))
    <div class="px-4 alert z99 absolute pin-c lg:w-1/2 w-full ">
        <div class="rounded-md bg-red-100 p-4 shadow-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm leading-5 font-bold text-red-900">
                        Error!
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-red-800">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                    <div class="mt-4">
                        <div class="-mx-2 -my-1.5 flex">
                            <button type="button" data-dismiss="alert" aria-label="Dismiss"
                                    class="px-2 py-1.5 rounded text-sm leading-5 font-medium text-red-900 bg-red-200 hover:bg-red-300 focus:outline-none focus:bg-red-200 transition ease-in-out duration-150">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="px-4 alert z99 absolute pin-c lg:w-1/2 w-full ">
        <div class="rounded-md bg-orange-100 p-4 shadow-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm leading-5 font-bold text-orange-900">
                        Warning!
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-orange-800">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                    <div class="mt-4">
                        <div class="-mx-2 -my-1.5 flex">
                            <button type="button" data-dismiss="alert" aria-label="Dismiss"
                                    class="px-2 py-1.5 rounded text-sm leading-5 font-medium text-orange-900 bg-orange-200 hover:bg-orange-300 focus:outline-none focus:bg-orange-200 transition ease-in-out duration-150">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="px-4 alert z99 absolute pin-c lg:w-1/2 w-full ">
        <div class="rounded-md bg-blue-100 p-4 shadow-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm leading-5 font-bold text-blue-900">
                        Information:
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-blue-800">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                    <div class="mt-4">
                        <div class="-mx-2 -my-1.5 flex">
                            <button type="button" data-dismiss="alert" aria-label="Dismiss"
                                    class="px-2 py-1.5 rounded text-sm leading-5 font-medium text-blue-900 bg-blue-200 hover:bg-blue-300 focus:outline-none focus:bg-blue-200 transition ease-in-out duration-150">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="px-4 alert z99 absolute pin-c lg:w-1/2 w-full ">
        <div class="rounded-md bg-red-100 p-4 shadow-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm leading-5 font-bold text-red-900">
                        Error!
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-red-800">
                        <p class="font-bold">
                            Please check the form for errors. You seem to be having issues here.
                        </p>
                        <ul class="list-inside list-decimal">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mt-4">
                        <div class="-mx-2 -my-1.5 flex">
                            <button type="button" data-dismiss="alert" aria-label="Dismiss"
                                    class="px-2 py-1.5 rounded text-sm leading-5 font-medium text-red-900 bg-red-200 hover:bg-red-300 focus:outline-none focus:bg-red-200 transition ease-in-out duration-150">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
