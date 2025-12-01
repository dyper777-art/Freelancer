<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Optional: Products in cart relationship
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    // Optional: Products in orders
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
