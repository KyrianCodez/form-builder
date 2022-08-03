<?php

namespace App\Http\Livewire;
use App\Models\QuestionType;
use Livewire\Component;
use App\Models\QuestionOptions;
class EditQuestion extends Component
{   
    public $form, $form_questions=[], $increment, $question, $i, $types, $options;
    protected $rules = [
        'question.title' => 'required|string|max:255',
        'question.question_types_id' => 'required|integer|numeric',
        'options.*.value' => 'required_if:question.question_types_id,1|required_if:question.question_types_id,2|required_if:question.question_types_id,3|string',
        'question.required' => 'boolean',
    ];
    


    public function mount(){
        $this->types = QuestionType::all();
        $this->options = $this->question->questionOptions;
        $this->increment = 1;
        
    }
 
    public function add_option(){
        $this->validateOnly('options.*.value');
        $this->emitUp('loading');
        $option = new QuestionOptions();
        $this->question->questionOptions()->save($option);
        $this->options = $this->question->questionOptions;
        
    }
    public function remove_option(){
        $this->increment --;
    }
    public function updatedQuestion(){
        $this->validate();
        $this->emitUp('loading');
        $this->question->save();
        
    }
      public function updatedOptions(){
        $this->validate();
        $this->emitUp('loading');
        $this->question->save();
    
        $this->question->questionOptions()->saveMany($this->options);
       
    }
    
    // public function updatedQuestionQuestionTypesId(){
    //     $this->validate()
    // }
    // public function updatedQuestionTitle(){
        
    //     $this->validateOnly('question.title');
    //     $this->question->save();
    // }
    // public function updatedQuestionOptions(){
    //     $this->validateOnly('question.options.*.key');
    //     $this->question->save();
    // }
    public function save (){
        $this->validate();
        $this->form->save();
    }
    public function render()
    {
        return view('livewire.edit-question');
    }
}
