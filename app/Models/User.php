<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'temporary_password',
        'role_id',
        'employee_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function Student()  {
        return $this->hasMany(Students::class,'user_id','id');
        
    }
    public function Class()  {
        return $this->hasMany(Classes::class,'user_id','id');
        
    }
    public function Employee()  {
        return $this->hasMany(Employees::class,'user_id','id');
        
    }
    public function Subject()  {
        return $this->hasMany(Subjects::class,'user_id','id');
        
    }

    public function Role()  {

        return $this->belongsTo(Role::class);
       
      }
      public function Employees()  {

        return $this->belongsTo(Employees::class);
       
      }
}
