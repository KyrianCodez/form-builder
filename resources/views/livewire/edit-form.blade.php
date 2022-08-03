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
                    <div >
                        <span wire:loading.remove.delay >All changes saved in database</span>
                        <span wire:loading.delay> <i class="fa fa-spinner fa-spin"></i>Saving...</span>
                    </div>
                   <x-form-input name="form.name"  type="text">

                   </x-form-input>
                    @error('form.name') <span class="error">{{ $message }}</span> @enderror
                   <x-form-input name="form.description"  type=text> </x-form-input>
                   @error('form.description') <span class="error">{{ $message }}</span> @enderror
                   @isset($form->questions)
                    @foreach ($form->questions as $i => $question )
                            
                            @livewire('edit-question', ['form'=>&$form, 'i'=>$i, 'question'=>&$question], key('question'.$question->id))
                    @endforeach
                   @endisset
                    @livewire('control-panel',['form_id'=>$form->id])
                
            </div>
          
        </div>
      
    </div>
   

      
</div>
