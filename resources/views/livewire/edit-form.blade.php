<div>

        <x-slot name=header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create new form') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                       <x-form-input name="form.name" type="text">

                       </x-form-input>
                       <x-form-input name="form.description" type=text> </x-form-input>
                        
                </div>
            </div>
        </div>
</div>
