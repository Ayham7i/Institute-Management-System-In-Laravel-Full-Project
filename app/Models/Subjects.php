<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $fillable = [
        'id',
        'name',
        'Marks',
        'class_id',
        'user_id',
    ];
    
   public function class()  {

    return $this->belongsTo(Classes::class);
   
  }
  public function user()  {

    return $this->belongsTo(User::class);
   
  }

}
