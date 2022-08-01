<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Form;
class EditForm extends Component
{   public $form, $form_name, $form_description, $form_questions=[];
    protected $rules = [
        'form.name' => 'required|string',
        'form.description' => 'string',
    ];
    public function mount($id){
        $this->form = Form::find($id);
        $this->form =$this->form->load('questions','user');
        
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
