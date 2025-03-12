<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'products';
    protected $fillable = ['name', 'category_id', 'SKU', 'publishing_company_id', 'author', 'price', 'quantity', 'description', 'published_date', 'avatar'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function publishingCompany()
    {
        return $this->belongsTo(PublishingCompany::class, 'publishing_company_id');
    }

    public function purchaseDetails()
    {
        return $this->hasMany(PurchaseDetail::class, 'product_id');
=======
    protected $table = 'product';
    protected $primaryKey = 'Product_Id';
    public $incrementing = true; // Product_Id là auto increment
    protected $keyType = 'int';  // Khóa chính là kiểu int

    protected $fillable = [
        'Category_Id',
        'SKU',
        'Name',
        'Publishing_Company_Id',
        'Author',
        'Price',
        'Quantity',
        'Description',
        'Date',
        'Avatar',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'Category_Id');
    }
    
    public function publishingCompany()
    {
        return $this->belongsTo(PublishingCompany::class, 'Publishing_Company_Id');
>>>>>>> main
    }
}
