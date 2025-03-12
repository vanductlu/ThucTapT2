<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'user_roles';
    protected $fillable = ['role_name'];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
=======
    protected $primaryKey = 'Role_Id'; 

    protected $fillable = [
        'Role_Name',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'User_Role', 'Role_Id');
>>>>>>> main
    }
}
