<x-app-layout >
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight dark:text-gray-300 ">
            {{ __('Create your profile') }}
        </h2>
    </x-slot>

    <div class="py-12 pl-3 pr-3">
        <div class="w-full max-w-2xl mx-auto space-y-4 sm:px-6 lg:px-12">
             <x-button icon="arrow-left" class="mb-8" href="{{ route('dashboard') }}">All Notes</x-button>
 <livewire:students.form-create-student /> 
        </div>
    </div>
</x-app-layout>