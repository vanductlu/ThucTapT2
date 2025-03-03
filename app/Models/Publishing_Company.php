<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publishing_Company extends Model
{
    use HasFactory;

    protected $table = 'publishing_companies';
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'publishing_company_id');
    }
}
