<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'purchase_details';
    protected $fillable = ['purchase_id', 'product_id', 'quantity', 'total_price'];

    public function purchase()
    {
        return $this->belongsTo(Purchase::class, 'purchase_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
=======
    protected $primaryKey = 'Purchase_Id, Product_Id'; // Cặp khóa chính

    protected $fillable = [
        'Purchase_Id',
        'Product_Id',
        'Quantity',
        'TotalAmount',
    ];
}
>>>>>>> main
