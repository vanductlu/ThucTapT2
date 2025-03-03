<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseState extends Model
{
    use HasFactory;

    protected $table = 'purchase_states';
    protected $fillable = ['value', 'description', 'display_text'];

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'purchase_state_id');
    }
}
