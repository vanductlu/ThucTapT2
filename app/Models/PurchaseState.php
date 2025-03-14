<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseState extends Model
{
    use HasFactory;

    protected $primaryKey = 'PurchaseState_Key'; // Đảm bảo primary key đúng

    protected $fillable = [
        'Value',
        'Description',
        'DisplayText',
    ];
}
