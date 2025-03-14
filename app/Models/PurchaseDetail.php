<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'Purchase_Id, Product_Id'; // Cặp khóa chính

    protected $fillable = [
        'Purchase_Id',
        'Product_Id',
        'Quantity',
        'TotalAmount',
    ];
}
