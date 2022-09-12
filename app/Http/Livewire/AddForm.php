<?php

namespace App\Http\Livewire;
use App\Models\Form;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Browsershot\Browsershot;
class AddForm extends Component
{   public $form, $userforms;
    
    public function create(){
        $this->form = new Form;
        $this->form->user_id = Auth::user()->id;
        $this->form->save();    
        error_log($this->form);
        
        $storage_path = public_path('images/'.'test.jpg');
     
       
        $this->form->save();
        return redirect()->route('edit-form', ['form_id'=>$this->form->id]);
      
    }
    
    public function render()
    {
        return view('livewire.add-form');
    }
}
