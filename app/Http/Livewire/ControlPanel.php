<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
class ControlPanel extends Component
{   
    public $form_id;
    public function addQuestion($form_id)
    {
        $question = new Question(['form_id'=>$form_id]);
        $question->save();
        return redirect()->route('edit-form', ['form_id'=>$form_id]);
    }
    
    public function render()
    {
        return view('livewire.control-panel');
    }
}
