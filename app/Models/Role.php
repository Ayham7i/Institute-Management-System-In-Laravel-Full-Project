<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{  
    protected $fillable = [
        'id',
        'name',
        'Starting_Date',
        'Ending_Date',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }




}


