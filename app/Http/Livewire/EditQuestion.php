<?php

namespace App\Http\Livewire;
use App\Models\QuestionType;
use Livewire\Component;

class EditQuestion extends Component
{   
    public $form, $form_questions=[], $increment = 0, $question, $i, $types;
    protected $rules = [
        'form.questions.*.title' => 'required|string|max:255',
        'form.questions.*.description' => 'string',
        'form.questions.*.question_types_id' => 'required|integer|numeric',
        'form.questions.*.options' => 'required_if:form.questions.*.type,SA|required_if:form.questions.*.type,PA|string',
        'form.questions.*.required' => 'boolean',
        'form.questions.*.value' => 'required_if:form.questions.*.required,true|string|max:255',
        'question.question_types_id' => 'required|integer|numeric'
    ];
    public function mount(){
        $this->types = QuestionType::all();
    }
    public function render()
    {
        return view('livewire.edit-question');
    }
}
