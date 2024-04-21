<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'id',
        'Name',
        'Image',
        'Email',
        'Experiance_Years',
        'Phone',
        'Hire_Date',
        'Address',
        'user_id',
    ];
}
