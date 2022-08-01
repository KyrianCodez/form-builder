<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function createForm(){
        $form = new Form;
        $form->user_id = Auth::user()->id;
        $form->save();
        
        return view('dash.edit-form',['form'=>$form]);
    }
    
}
