<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
=======
    protected $table = 'category'; // Nên để tên table viết thường để chuẩn Laravel
    protected $primaryKey = 'Category_Id'; 
    public $incrementing = false; // Vì Category_Id không phải auto-increment
    protected $keyType = 'string'; // Vì Category_Id là kiểu string (HNN, KT, ...)

    protected $fillable = [
        'Category_Id',
        'Category_Name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'Category_Id', 'Category_Id');
>>>>>>> main
    }
}
