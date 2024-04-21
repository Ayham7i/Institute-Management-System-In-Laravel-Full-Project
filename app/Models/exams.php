<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exams extends Model
{
    protected $fillable = [
        'id',
        'name',
        'Starting_Date',
        'Ending_Date',
    ];
}
