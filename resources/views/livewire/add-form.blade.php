<div>
    <x-slot name=header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Form') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-200 border-b border-gray-200">
                    <button  wire:click="create" class=" text-slate-700 hover:outline-blue-400 hover:outline hover:outline-1">
                    <div class=" p-6 w-48 bg-white border-gray-200 flex justify-center">
                        <i class="fa-solid fa-plus fa-8x "></i>
                      
                    </div>
                </button>
                </div>
            </div>
            @livewire('user-forms')
        </div>
        
    </div>
     
</div>
