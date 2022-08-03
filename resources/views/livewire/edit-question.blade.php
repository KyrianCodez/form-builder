<div>
        <x-form-input type="text"  name="question.title"  />
            @error('question.title') <span class="error">{{ $message }}</span> @enderror


        <select wire:model="question.question_types_id">
            @foreach ($types as $type )
                <option value="{{$type->id}}">{{$type->type}}</option>
            @endforeach
        </select>
        
        @switch($question->question_types_id)
            @case('1')
            @foreach($options as $key => $option)

            <div class="flex flex-row justify-between pt-12">
                <label for="option"><i class="fa-regular fa-circle"></i></label>
                <x-form-input type="text"  name="options.{{$key}}.value"></x-form-input>
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
            @foreach($options as $key => $option)
            <x-form-input disabled type="text" name="options.{{$key}}.value"/> 
            @endforeach
       
            @break
            @case(5)
            @foreach($options as $key => $option)
            <textarea disabled wire:model="options.{{$key}}.value"> </textarea>
            @endforeach
              
            @break
        @default


            
        @endswitch
      
        <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
            <input type="checkbox" wire:model="question.required" id="default-toggle" class="sr-only peer">
            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Required</span>
          </label>         
</div>
