<div>
    <x-slot name=header>
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Create new form') }}
      
      </h2>
      <x-button type="button" class="px-6
      py-2.5
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      transition
      duration-150
      ease-in-out" data-toggle="modal" data-target="#exampleModal">
      Copy Link
      </x-button>
      </div>
        
    </x-slot>
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div >
            <span wire:loading.remove.delay >All changes saved in database</span>
            <span wire:loading.delay> <i class="fa fa-spinner fa-spin"></i>Saving...</span>
        </div>
        <div class=" flex">
             <div class="flex-1 overflow-hidden shadow-sm sm:rounded-lg mt-5 ">
             
                <div class="p-6 bg-white border-b border-gray-200 rounded-lg">
                <x-copy-modal></x-copy-modal>
                    <div class=" relative">
                      <input wire:model="form.name" class=" effect text-4xl font-normal"  type="text"/>
                      <span class="focus-border"></span>
                      @error('form.name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                   
                    
                    <div class="relative mt-2">
                      <input wire:model="form.description" class="effect" type=text placeholder="Form description"/>
                      <span class="focus-border"></span>
                      @error('form.description') <span class="error">{{ $message }}</span> @enderror
                    </div>
                 
                 
                  {{-- <input id="canvas" wire:model="form.image" type="file" /> --}}


                
            </div>
           
              @isset($form->questions)
              @foreach ($form->questions as $i => $question )
                <div class=" p-6 mt-5 bg-white border-b border-gray-200 rounded-lg">
                      @livewire('edit-question', ['form'=>&$form, 'i'=>$i, 'question'=>&$question], key('question'.$question->id))
                    </div>
              @endforeach
             @endisset
            
           
        </div>
        <div class="flex-none w-24 h-24 py-6 px-6">
          @livewire('control-panel',['form_id'=>$form->id])
        </div>
        </div>
        
       
    </div>
    
   
    {{-- <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <script >
            document.addEventListener("DOMContentLoaded", () => {
              Livewire.on('updateForm', form => {
                alert('pls')
              })
    });
     
      window.addEventListener('load',()=>{
        html2canvas(document.body).then(function(canvas) {
        @this
      })
       
    });
    </script> --}}
    
   
</div>
