<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'purchases';
    protected $fillable = ['user_id', 'purchase_state_id', 'delivery_address', 'phone_number'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
=======
    protected $primaryKey = 'Purchase_Id'; // Đảm bảo primary key đúng

    protected $fillable = [
        'User_Id',
        'Name',
        'DeliveryAddress',
        'PhoneNumber',
        'Email',
        'CreatedAt',
        'UpdatedAt',
        'Total',
        'State',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_Id');
>>>>>>> main
    }

    public function state()
    {
<<<<<<< HEAD
        return $this->belongsTo(PurchaseState::class, 'purchase_state_id');
=======
        return $this->belongsTo(PurchaseState::class, 'State', 'PurchaseState_Key');
>>>>>>> main
    }

    public function details()
    {
<<<<<<< HEAD
        return $this->hasMany(PurchaseDetail::class, 'purchase_id');
=======
        return $this->hasMany(PurchaseDetail::class, 'Purchase_Id', 'Purchase_Id');
>>>>>>> main
    }
}
