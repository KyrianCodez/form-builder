<?php

namespace App\Http\Livewire;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddForm extends Component
{   public $form;
    public function create(){
        $this->form = new Form;
        $this->form->user_id = Auth::user()->id;
        $this->form->save();
        error_log($this->form);
        
        return redirect()->route('edit-form', ['form_id'=>$this->form->id]);
      
    }
    public function render()
    {
        return view('livewire.add-form');
    }
}
