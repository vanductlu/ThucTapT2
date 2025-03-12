<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'User_Id'; 

<<<<<<< HEAD
    protected $table = 'users';
    protected $fillable = ['role_id', 'email', 'password', 'name', 'address', 'phone_number'];

    public function role()
    {
        return $this->belongsTo(UserRole::class, 'role_id');
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'user_id');
    }



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
    ];

    
}
=======
    protected $fillable = [
        'User_Role',
        'Email',
        'Password',
        'Last_Name',
        'First_Name',
        'Address',
        'Phonenumber',
    ];

    public function role()
    {
        return $this->belongsTo(UserRole::class, 'User_Role', 'Role_Id');
    }
}
>>>>>>> main
