<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Readline\Transient;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'products_id', 'transactions_id'
    ];

    // relasi one to one menggunakan hasOne
    public function product() {
        return $this->hasOne(Product::class, 'id', 'products_id');
    }
}
