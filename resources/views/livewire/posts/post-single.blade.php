<div>
    <li class="my-4 bg-white shadow sm:rounded-md">
        <a href="#"
           class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
            <div class="flex items-center px-4 py-4 sm:px-6">
                <div class="min-w-0 flex-1 flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12 rounded-full" src="{{ $post->user->avatar() }}" alt=""/>
                    </div>
                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                        <div>
                            <div class="text-sm leading-5 font-medium text-indigo-600 truncate">
                                {{ $post->user->name }}
                            </div>
                            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                                <span class="truncate">{{ $post->user->email }}</span>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div>
                                <div class="text-sm leading-5 text-gray-900">
                                    {{ $post->title  }}
                                </div>
                                <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                    {!! $post->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
        </a>
    </li>
</div>
{{--border-t border-gray-200--}}
