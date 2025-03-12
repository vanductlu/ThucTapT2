<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseState extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'purchase_states';
    protected $fillable = ['value', 'description', 'display_text'];

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'purchase_state_id');
    }
=======
    protected $primaryKey = 'PurchaseState_Key'; // Đảm bảo primary key đúng

    protected $fillable = [
        'Value',
        'Description',
        'DisplayText',
    ];
>>>>>>> main
}
