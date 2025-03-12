<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

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
    }

    public function state()
    {
        return $this->belongsTo(PurchaseState::class, 'State', 'PurchaseState_Key');
    }

    public function details()
    {
        return $this->hasMany(PurchaseDetail::class, 'Purchase_Id', 'Purchase_Id');
    }
}
