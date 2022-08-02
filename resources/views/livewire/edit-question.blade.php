<div>
   
        
    
        <x-form-input type="text"  name="form.questions.{{$i}}.title"/>
        <x-form-input type="text" name="form.questions.{{$i}}.description"/>
       

        <select wire:model="question.question_types_id">
            @foreach ($types as $type )
                <option value="{{$type->id}}">{{$type->type}}</option>
            @endforeach
        </select>
        
        @switch($question->question_types_id)
            @case('1')
                @livewire('option-container',['i'=>$i], key('item-'.$i.$question->id))
                @break
            @case('2')
                <select>
                    <option disabled></option>
                    <input type=text wire:model="form.questions.{{$i}}.options">
                </select>
                @break
            @case('3')
                
       
            @break
            @case(4)
            <x-form-input  type="text" name="form.questions.{{$i}}.options"/> 
            @break
            @case(5)
                <x-form-input  type="textfield"  name="form.questions.{{$i}}.options"/>
            @break
        @default

            
        @endswitch
      
        
   


      

    
  
    
           
</div>
