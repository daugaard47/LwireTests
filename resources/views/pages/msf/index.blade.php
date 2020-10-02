@extends('layouts.app')
@section('content')

    <div class="flex items-center">
        <div class="md:w-1/2 md:px-0 mx-auto w-full px-6">
            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
                <div class="font-semibold bg-gray-200 text-gray-700 py-4 px-6 mb-0 capitalize">
                    New Multi-Step Form
                </div>
                <div class="py-4 px-2">
                <livewire:msf.msf-index/>
                </div>
            </div>
        </div>
    </div>
@endsection
