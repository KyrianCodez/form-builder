<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Form;
use Error;

class EditForm extends Component
{   public $form, $form_name, $form_description;
    protected $rules = [
        'form.name' => 'required|string',
        'form.description' => 'string',
       
    ];
    public function mount($form_id){
        $this->form = Form::find($form_id)->load('questions','user','questionOptions');
    }
    
    public function updatedFormName(){
        
        $this->validateOnly('form.name');
        
        $this->form->save();
    
    }
    public function updatedFormDescription(){
        $this->validate();
        $this->form->save();
    }
    
 
    public function save(){
        $this->validate();
        $this->form->save();
    }
    public function render()
    {
        return view('livewire.edit-form');
    }
}
