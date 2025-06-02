<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function barcodes()
    {
        return $this->belongsTo(Barcode::class, 'barcode_id');
    }

    public function items()
    {
        return $this->hasMany(TransactionItems::class, 'transaction_id');
    }

}
