<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Chỉ định tên bảng
    protected $table = 'user'; // Đảm bảo tên bảng là 'user'
    protected $primaryKey = 'User_Id';
    // Tắt tính năng tự động quản lý thời gian
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'First_name', 'Last_name', 'email', 'password', 'User_Role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function role()
    {
        return $this->belongsTo(UserRole::class, 'User_Role', 'Role_Id');
    }
}