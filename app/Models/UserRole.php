<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $primaryKey = 'Role_Id'; 
    protected $table = 'user_role';

    protected $fillable = [
        'Role_Name',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'User_Role', 'Role_Id');
    }
}
