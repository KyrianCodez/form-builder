<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;

class FormResponse extends Component
{   
    public $form;
    public function mount($form_id)
    {   
        $this->form = Form::find($form_id)->load('questions','user','questionOptions');
       
    }
    public function render()
    {
        return view('livewire.form-response')->layout('layouts.response');
    }
}
