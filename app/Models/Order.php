<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $casts=['datetime'=>'datetime'];
//    protected $fillable=['name','date','amount','amountTVA','id'];
    protected $fillable=['datetime','amount','amountVTA','customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
