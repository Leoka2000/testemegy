<x-app-layout >
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight dark:text-gray-300 ">
            {{ __('All students') }}
        </h2>
    </x-slot>

    <div class="py-12 pl-3 pr-3">
        <div class="px-5 sm:px-20 lg:px-12 xl:px-32">
             <x-button icon="arrow-left" class="mb-8" href="{{ route('dashboard') }}">Back</x-button>
 <livewire:students.pages.all-students  /> 
        </div>
    </div>
</x-app-layout>