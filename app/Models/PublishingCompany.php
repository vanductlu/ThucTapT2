<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishingCompany extends Model
{
    use HasFactory;

    protected $table = 'Publishing_Company';
    protected $primaryKey = 'Publishing_Company_Id'; // Đảm bảo primary key đúng

    protected $fillable = [
        'Publishing_Company_Name',
    ];

    public function products()
{
    return $this->hasMany(Product::class, 'Publishing_Company_Id', 'Publishing_Company_Id');
}
}
