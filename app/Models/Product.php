<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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
    }
}
