<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Students;
use App\Models\Employees;

class Classes extends Model
{
    protected $fillable = [
        'id',
        'name',
        'M-Fees',
        'Study-Hours',
        'employee_id',
        'user_id',
    ];

    public function Student()  {
        return $this->hasMany(Students::class,'class_id','id');
        
    }

    public function Employee()  {

        return $this->belongsTo(Employees::class);
       
      }

      public function Subject()  {
        return $this->hasMany(Subjects::class,'class_id','id');
        
    }

    public function user()  {

        return $this->belongsTo(User::class);
       
      }
}
