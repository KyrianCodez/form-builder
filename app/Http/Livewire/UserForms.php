<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserForms extends Component
{   
    public $userforms;
    public function mount(){
  
        $this->userforms = User::find(Auth::user()->id)->forms()->get();
     

    }
    public function render()
    {
        return view('livewire.user-forms');
    }
}
