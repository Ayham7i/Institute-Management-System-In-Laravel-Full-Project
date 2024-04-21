<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;

class Employees extends Model
{
    protected $fillable = [
        'id',
        'name',
        'Type',
        'Gender',
        'Experience',
        'Religion',
        'CNIC',
        'Email',
        'Education',
        'Blood_Group',
        'DOB',
        'Salary',
        'Father_Name',
        'Join_Date',
        'Phone',
        'Address',
        'Image',
        'user_id',

    ];
    public function Class()  {
        return $this->hasMany(Classes::class,'employee_id','id');
        
    }
    public function user()  {

        return $this->belongsTo(User::class);
       
      }

      public function Users()  {
        return $this->hasMany(User::class,'employee_id','id');
        
    }
}
