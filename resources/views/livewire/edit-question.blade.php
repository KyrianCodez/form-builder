<div>
    <div class="flex">
        <div class="flex-1 relative">
            <input class="effect" type="text"  wire:model="question.title"  />
            <span class="focus-border"></span>
            @error('question.title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="flex-none w-40 "></div>
        

<select wire:model="question.question_types_id"  class=" rounded-lg">
  < @foreach ($types as $type )
  <option value="{{$type->id}}">{{$type->type}}</option>
@endforeach
</select>

            
    </div>
        

      
        
        @switch($question->question_types_id)
            @case('1')
            @foreach($options as $key => $option)

            <div class="flex flex-row justify-between pt-12">
                <label for="option"><i class="fa-regular fa-circle"></i></label>
                <input type="text" class="effect" name="options.{{$key}}.value" />
                <span class="focus-border"></span>
                <div wire:loading wire:target="options">
                    Updating quantity...
                </div>
            </div>
            @endforeach
            <button type="button" wire:click="add_option">
                add row
            </button>   
                @break
            @case('2')
            <ol class=" list-decimal">
            @foreach($options as $key => $option)
            
                <li >
                    <input class="list-item" type=text wire:model="options.{{$key}}.value">
                </li>
               
           
            @endforeach
            </ol>
            <button type="button" wire:click="add_option">
                add row
            </button>   
                @break
            @case('3')
            <ul >
                @foreach($options as $key => $option)
                
                    <li >
                        <label for="option"><i class="fa-regular fa-square"></i></label>
                        <input name="option" class="list-item" type=text wire:model="options.{{$key}}.value">
                    </li>
        
               
                @endforeach
                </ul>
                <button type="button" wire:click="add_option">
                    add row
                </button>   
           
       
            @break
            @case(4)
           
            <x-form-input disabled type="text" name="options.value"/> 

            @break
            @case(5)

            <textarea disabled wire:model="options.value"> </textarea>

              
            @break
        @default


            
        @endswitch
      
        <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
            <input type="checkbox" wire:model="question.required" id="default-toggle" class="sr-only peer">
            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Required</span>
          </label>         
</div>
