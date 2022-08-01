<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Form extends Model
{
    use HasFactory;
    public function user(){
       return $this->belongsTo(User::class);
    }
    public function questions(){
      return  $this->hasMany(Question::class);
    }
}

