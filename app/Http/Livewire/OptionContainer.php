<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OptionContainer extends Component
{   public $increment, $i, $form, $question;
    
    public function mount(){
        $this->increment = 0;
    }
    public function add_option(){
        $this->increment ++;
    }
    public function removeOption(){
        $this->increment --;
    }
    public function render()
    {
        return view('livewire.option-container');
    }
}
