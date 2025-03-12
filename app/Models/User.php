<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'User_Id'; 

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