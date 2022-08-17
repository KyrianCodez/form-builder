<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;
use App\Models\Answers;
use App\Models\Sessions;

class FormResponse extends Component
{   
    public $form, $answer, $session_info;
 
    public function mount($form_id)
    {   
        $this->form = Form::find($form_id)->load('questions','user','questionOptions');
        request()->session()->put('userType','anon');
            $this->session_info = Sessions::find(request()->session()->getId());
            $this->answer = Answers::firstOrNew(
            ['sessions_id' => $this->session_info->id],['form_id'=>$form_id, ]);
            $this->answer->save();
        
       
    }
    public function render()
    {
        return view('livewire.form-response')->layout('layouts.response');
    }
}
