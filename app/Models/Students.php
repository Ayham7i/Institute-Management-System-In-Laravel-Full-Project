<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;

class Students extends Model
{
    protected $fillable = [
        'id',
        'name',
        'Birth_FromId',
        'Image',
        'Phone',
        'Admission_Date',
        'Discount',
        'Discease_if',
        'Ident_Mark',
        'Pre_School',
        'Religion',
        'DOB',
        'Blood_Group',
        'Gender',
        'Address',
        'Email',
        'Orphen',
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
