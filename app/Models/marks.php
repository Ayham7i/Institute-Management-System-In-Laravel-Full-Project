<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marks extends Model
{
    protected $fillable = [
        'studentid',
        'studentname',
        'classname',
        'examname',
        'marks',
    ];
}
