<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Form;
use Error;

class EditForm extends Component
{   public $form, $form_name, $form_description, $form_questions=[];
    protected $rules = [
        'form.name' => 'required|string',
        'form.description' => 'string',
    ];
    public function mount($form_id){
        $this->form = Form::find($form_id)->load('questions','user');
       
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
